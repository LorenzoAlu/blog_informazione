<?php

namespace App\Mail;

use App\Models\Article;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactDailyUser extends Mailable
{
    use Queueable, SerializesModels;


    public $bag;
    
    /**
     * Create a new bag instance.
     *
     * @return void
     */

   
    public function __construct($bag)
    {
        $this->bag=$bag;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $articles=Article::orderBy('id','desc')->take(5)->get();

        return $this->from('mona@mano.it')
                    ->view('contacts.usersMails',compact('articles'));
    }
}
