<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class optionController extends Controller
{
  function getallOptions(){
    $option = DB::table('rms_options')->get();
    return view('registerStudent',['option'=>$option]);
  }
}
