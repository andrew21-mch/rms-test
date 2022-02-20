<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    //send mail
    function contact(Request $request){
        Mail::send(new ContactMail($request));
        $request->session()->put('mail_status', 'Message Sent!');
          return redirect('/contact_us');
        ;
        
    }
}
