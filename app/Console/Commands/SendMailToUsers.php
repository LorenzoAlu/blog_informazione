<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Mail\ContactDailyUser;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendMailToUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:SendMailToUsers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'invia mail a tutti gli utenti';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::all();
        $messaggio = 'ti ricordi di noi? Ti aspettiamo';
        $content=compact('messaggio');
        foreach ($users as $user) {
            Mail::to($user->email)->send(new ContactDailyUser($content));
        } 
    }
}
