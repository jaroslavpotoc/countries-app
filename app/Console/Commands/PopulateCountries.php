<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Country;
use GuzzleHttp\Client;

class PopulateCountries extends Command
{
    // Define the signature and description of the command
    protected $signature = 'populate:countries';
    protected $description = 'Populate countries table with data from restcountries.com';

    // Handle method to execute the command logic
    public function handle()
    {
        // Create a Guzzle HTTP client instance
        $client = new Client();

        // Send a GET request to the restcountries.com API to fetch countries data
        $response = $client->get('https://restcountries.com/v3.1/all');

        // Decode the JSON response into an associative array
        $countries = json_decode($response->getBody(), true);

        // Filter out only the European countries from the response
        $europeanCountries = array_filter($countries, function ($country) {
            return in_array('Europe', $country['continents']);
        });

        // Loop through the European countries
        foreach ($europeanCountries as $country) {
            // Get currency info from the API response
            $currencies = $country['currencies'] ?? null;

            // Extract currency name, symbol, and code
            $currency_name = null;
            $currency_symbol = null;
            $currency_code = null;
            if ($currencies) {
                foreach ($currencies as $code => $currency) {
                    $currency_name = $currency['name'] ?? null;
                    $currency_symbol = $currency['symbol'] ?? null;
                    $currency_code = $code; // Assign the currency code
                    // We consider only the first currency found
                    break;
                }
            }

            // Upsert a record in the 'countries' table
            Country::upsertCountry([
                'cioc' => $country['cioc'] ?? null,
                'official_name' => $country['name']['official'] ?? null,
                'common_name' => $country['name']['common'] ?? null,
                'tld' => implode(', ', $country['tld'] ?? []),
                'independent' => $country['independent'] ?? null,
                'status' => $country['status'] ?? null,
                'un_member' => $country['unMember'] ?? null,
                'currency_name' => $currency_name,
                'currency_symbol' => $currency_symbol,
                'currency_code' => $currency_code,
                'capital' => $country['capital'][0] ?? null,
                'region' => $country['region'] ?? null,
                'subregion' => $country['subregion'] ?? null,
                'lat' => $country['latlng'][0] ?? null,
                'lng' => $country['latlng'][1] ?? null,
                'flag' => $country['flags']['png'] ?? null,
                'population' => $country['population'] ?? null,
                'timezones' => isset($country['timezones']) ? implode(', ', $country['timezones']) : null,
            ]);
        }

        // Output a success message
        $this->info('European countries data has been populated successfully.');
    }
}
