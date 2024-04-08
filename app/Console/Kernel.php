<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\FetchCurrencyRates; // Import the command to fetch currency rates
use App\Services\DataImportService; // Import the service for data import

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        FetchCurrencyRates::class, // Command to fetch currency rates
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Regularly execute the command to fetch currency rates every day at 3:00 AM
        $schedule->command('fetch:currency-rates')->dailyAt('3:00');
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    /**
     * Bootstrap the application's service providers.
     *
     * @return void
     */
    protected function bootstrappers()
    {
        parent::bootstrappers();

        // Instantiate the data import service and call the importData method
        $importService = app(DataImportService::class);
        $importService->importData();
    }
}
