<?php

namespace App\Console;

use App\Console\Commands\SendMailToUsers;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        SendMailToUsers::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('mail:SendMailToUsers')->everyMinute();

        //per far funzionare il programma in maniera dinamica utilizzare il programma 
        //php artisan schedule:work
        //non rompere le convenzioni di laravel
        //per inviare una mail al giorno sostituire il comando everyMinute() con daily().
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
