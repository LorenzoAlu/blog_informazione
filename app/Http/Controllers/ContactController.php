<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Mail\ContactDailyUser;
use PhpParser\Node\Stmt\Foreach_;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function send(ContactRequest $request){
       
        $nome=$request->input('nome');
        $email=$request->input('email');
        $messaggio=$request->input('messaggio');
       
        $content=compact('nome','email','messaggio');
        Mail::to('admin@merda.it')->send(new ContactMail($content));
        return redirect(route('contacts.thankyou')); 
    }
    public function thankyou(){
        return view ('contacts.thankyou');
    }

}
