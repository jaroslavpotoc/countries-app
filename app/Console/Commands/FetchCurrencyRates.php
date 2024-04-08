<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\CurrencyRate;
use Carbon\Carbon;
use GuzzleHttp\Client;

class FetchCurrencyRates extends Command
{
    // Define the signature and description of the command
    protected $signature = 'fetch:currency-rates';
    protected $description = 'Fetch and store daily currency rates from ECB';

    // Handle method to execute the command logic
    public function handle()
    {
        // Create a Guzzle HTTP client instance
        $client = new Client();

        // Send a GET request to the ECB API to fetch currency rates
        $response = $client->get('https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml');

        // Get the response body content
        $xmlContent = $response->getBody()->getContents();

        // Parse XML content to extract currency rates
        $xml = simplexml_load_string($xmlContent);
        $json = json_encode($xml);

        // Extract currency rates from the JSON data
        $rates = json_decode($json, true)['Cube']['Cube']['Cube'];

        // Loop through the extracted currency rates
        foreach ($rates as $rate) {
            // Check if a record with the same currency code exists in the database
            $existingRate = CurrencyRate::where('currency_code', $rate['@attributes']['currency'])->first();

            // If a record exists, update it with the new rate
            if ($existingRate) {
                $existingRate->update([
                    'rate' => $rate['@attributes']['rate'],
                    'date' => Carbon::now()->toDateString(),
                ]);
            } else {
                // If no record exists, create a new record with the currency code and rate
                CurrencyRate::create([
                    'currency_code' => $rate['@attributes']['currency'],
                    'rate' => $rate['@attributes']['rate'],
                    'date' => Carbon::now()->toDateString(),
                ]);
            }
        }

        // Output a success message
        $this->info('Currency rates fetched and stored successfully.');
    }
}
