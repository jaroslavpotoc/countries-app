<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'official_name',   // Official name of the country
        'common_name',     // Commonly used name of the country
        'tld',             // Top-level domain associated with the country
        'cioc',            // Country IOC (International Olympic Committee) code
        'independent',     // Flag indicating whether the country is independent
        'status',          // Status of the country (e.g., recognized, disputed)
        'un_member',       // Flag indicating whether the country is a UN member
        'currency_code',   // Currency code used in the country (e.g., USD, EUR)
        'currency_name',   // Name of the currency used in the country
        'currency_symbol', // Symbol of the currency used in the country
        'capital',         // Capital city of the country
        'region',          // Region or continent where the country is located
        'subregion',       // Subregion where the country is located
        'lat',             // Latitude coordinate of the country's location
        'lng',             // Longitude coordinate of the country's location
        'flag',            // URL to the flag image of the country
        'population',      // Population of the country
        'timezones',       // Time zones observed in the country
    ];

    // Define the table name for storing country data
    protected $table = 'countries';

    /**
     * Upsert a country record.
     *
     * @param array $data
     * @return void
     */
    public static function upsertCountry($data)
    {
        // Find if the country exists by country code
        $existingCountry = self::where('cioc', $data['cioc'])->first();

        // If the country exists, update it. Otherwise, create a new one.
        if ($existingCountry) {
            $existingCountry->update($data);
        } else {
            self::create($data);
        }
    }
}
