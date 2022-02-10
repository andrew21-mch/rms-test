<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\master_sheet_table;

class masController extends Controller
{
    //
    function getmas(){
       return master_sheet_table::all();
    }
}
