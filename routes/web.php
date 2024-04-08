<?php

use App\Http\Controllers\CountryController; // Importing the CountryController class

// Route definition for the home page
Route::get('/', function () {
    return view('home'); // Returns the view of the home page
})->name('home'); // Sets the route name to 'home'

// Route definition for the contact page
Route::get('/contact-us', function () {
    return view('contact-us'); // Returns the view of the contact page
})->name('contact'); // Sets the route name to 'contact'

// Route definition for the pricing page
Route::get('/pricing', function () {
    return view('pricing'); // Returns the view of the pricing page
})->name('pricing'); // Sets the route name to 'pricing'

// Route definition for the country list page
Route::get('/country-list', [CountryController::class, 'index'])->name('country.list');
// When this route is visited, the 'index()' method in the 'CountryController' class is executed
