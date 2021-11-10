<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rms_log;
use Illuminate\Support\Facades\DB;

class logsController extends Controller
{
    function viewLogs(){
      $logs = DB::table('rms_logs')
      ->join('rms_teachers', 'rms_logs.teacher_id', 'rms_teachers.id')->get();
      return view('viewlogs',['logs'=>$logs]);
    }
    function clearlogs(){
      $logs = DB::table('rms_logs')
      ->join('rms_teachers', 'rms_logs.teacher_id', 'rms_teachers.id')->get();
      if(Rms_log::truncate()){
        return view('viewlogs',['logs'=>$logs]);
      };
    }
    public function search(Request $request){
    // Get the search value from the request
    $search = $request->input('search');

    // Search in the title and body columns from the posts table
    $posts = Rms+student::query()
        ->where('student_first_name', 'LIKE', "%{$search}%")
        ->orWhere('student_last_name', 'LIKE', "%{$search}%")
        ->get();

    // Return the search view with the resluts compacted
    return view('search', compact('posts'));
}
}
