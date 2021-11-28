<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    function contact(Request $req){
      return $req->input();
    }
}
