<?php

namespace App\Services;

use App\Models\Country;

class DataImportService
{
    /**
     * Import data from CSV file into the database.
     *
     * @return void
     */
    public function importData()
    {
        // Path to the CSV file
        $file = public_path('data/countries.csv'); 

        // Open the CSV file
        $handle = fopen($file, "r");
        if ($handle !== false) {
            // Read data line by line from the CSV file
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                // Create a new Country record for each line in the file
                $country = new Country();
                // Assuming the first column contains the country name
                $country->name = $data[0]; 
                // Assuming the second column contains the country code
                $country->code = $data[1];
                $country->save();
            }
            fclose($handle);
        }
    }
}
