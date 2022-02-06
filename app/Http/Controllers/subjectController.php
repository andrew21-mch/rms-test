<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rms_teacher;
use App\Models\Rms_subject;


class subjectController extends Controller
{
    function addsubject(Request $request)
    {
      $request->validate([
        'name'=>'required',
        'coef'=>'required',
        'code'=>'required'

      ]);
      $subject = new Rms_subject;
      $subject->name = $request->name;
      $subject->subject_code = $request->code;
      $subject->Coefficient = $request->coef;

      if($subject->save()){
         return '<script type="text/javascript">
         alert("Subject Added!");
         </script>';
      }
      else{
        return '<script type="text/javascript">
        alert("An Error Occured");
        </script>';
      }
    }
    function getsubject(){
      $subject = DB::table('rms_subjects')
      ->join('rms_teachers','rms_teachers.id','rms_subjects.teacher_id')
      ->get();
      return view('viewsubjects', ['subject'=>$subject]);
    }
    function updatesubject(){
      $findid = Rms_teacher::where('email','=',$request->email)->first();
      $id = $findid['id'];
     if(Rms_subject::where('teacher_id','=',$findid['id'])
      ->update(['teacher_id', '=', $id])
      ){
        return "Success";
      }
      return "could not updated subject table successfully";
    }
}
