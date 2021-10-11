<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class classController extends Controller
{
    function getallClasses(){
      $classes = DB::table('rms_classes')->get();
      return view('registerStudent',['class'=>$classes]);
    }
    
}
