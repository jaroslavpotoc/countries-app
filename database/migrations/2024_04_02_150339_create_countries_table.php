<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('official_name')->nullable(); // Official name of the country
            $table->string('common_name')->nullable(); // Common name of the country
            $table->string('tld')->nullable(); // Top-level domain of the country
            $table->string('cioc')->nullable(); // CIOC code of the country
            $table->boolean('independent')->nullable(); // Indicates if the country is independent
            $table->string('status')->nullable(); // Status of the country
            $table->boolean('un_member')->nullable(); // Indicates if the country is a UN member
            $table->string('capital')->nullable(); // Capital city of the country
            $table->string('region')->nullable(); // Region of the country
            $table->string('subregion')->nullable(); // Subregion of the country
            $table->double('lat', 10, 6)->nullable(); // Latitude of the country's location
            $table->double('lng', 10, 6)->nullable(); // Longitude of the country's location
            $table->string('flag')->nullable(); // URL to the country's flag image
            $table->integer('population')->nullable(); // Population of the country
            $table->string('timezones')->nullable(); // Timezones of the country
            $table->string('currency_code')->nullable(); // Currency code of the country
            $table->string('currency_name')->nullable(); // Currency name of the country
            $table->string('currency_symbol')->nullable(); // Currency symbol of the country
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
}
