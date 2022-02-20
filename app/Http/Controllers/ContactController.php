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
          return redirect('/contact_us')->with('status', 'Message Sent!');
        ;
    }
}
