<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrencyRate extends Model
{
    use HasFactory;

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'currency_code', // Currency code, e.g., USD, EUR, GBP
        'rate',          // Exchange rate against the base currency
        'date',          // Date when the rate was fetched/stored
    ];

    // Define the table name for storing currency rates
    protected $table = 'currency_rates';
}
