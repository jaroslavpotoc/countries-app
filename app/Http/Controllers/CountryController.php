<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response; // Import the Response class
use App\Models\Country;
use App\Models\CurrencyRate; // Import the CurrencyRate model

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all countries
        $countries = Country::all();
        
        // Retrieve all currency rates
        $currencyRates = CurrencyRate::all();
        
        // Pass both variables to the view and return as response
        return response()->view('countries', compact('countries', 'currencyRates'));
    }
}
