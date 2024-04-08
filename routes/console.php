<?php

use Illuminate\Foundation\Inspiring; // Importing the Inspiring class from Laravel
use Illuminate\Support\Facades\Artisan; // Importing the Artisan facade

// Command definition to display an inspiring quote
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote()); // Displaying an inspiring quote using the Inspiring class
})->purpose('Display an inspiring quote')->hourly(); // Setting the purpose of the command and its frequency
