<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rms_student;
use App\Models\Rms_result;
use Session;


class resultController extends Controller
{
    function getResult($id){
      return Rms_student::find($id);
    }
    function insertResult(Request $req){
      return $req::input();
    }


    function getFirstres(){
      $res = Rms_student::all();
      return view('marks.first_seq', ['res'=>$res]);
    }
    function getSecondres(){
      $res = Rms_student::all();
      return view('marks.second_seq', ['res'=>$res]);
    }
    function getThirdres(){
      $res = Rms_student::all();
      return view('marks.third_seq', ['res'=>$res]);
    }
    function getFourthres(){
      $res = Rms_student::all();
      return view('marks.fourth_seq', ['res'=>$res]);
    }
    function getFifthres(){
      $res = Rms_student::all();
      return view('marks.fifth_seq', ['res'=>$res]);
    }
    function getSixthres(){
      $res = Rms_student::all();
      return view('marks.sixth_seq', ['res'=>$res]);
    }

    function insertFirstSequence(Request $request){

      $result = new Rms_result;
      $result->student_id = $request->id;
      $result->class_id = $request->class_id;
      $result->sequence_id = 1;
      $result->subject_id = Session::get('subjectid');
      $result->mark1 = $request->mark;
      $result->academic_year = (now()->year);
      $result->teacher_id = Session::get('userid');

      if($result->save()){
        return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Saved </div>';
      }


    }

    function insertSecondSequence(Request $request){

      Rms_result::where('student_id', $request->id)
      ->where('subject_id', '=', Session::get('subjectid'))
      ->update(['mark2' => $request->mark]);

      //$result->save();


    }

    function insertThirdSequence(Request $request){

      Rms_result::where('student_id', $request->id)
      ->where('subject_id', '=', Session::get('subjectid'))
      ->update(['mark3' => $request->mark]);



    }

    function insertFourthSequence(Request $request){

      Rms_result::where('student_id', $request->id)
      ->where('subject_id', '=', Session::get('subjectid'))
      ->update(['mark4' => $request->mark]);


    }

    function insertFifthSequence(Request $request){

      Rms_result::where('student_id', $request->id)
      ->where('subject_id', '=', Session::get('subjectid'))
      ->update(['mark5' => $request->mark]);

    }

    function insertSixthSequence(Request $request){

      Rms_result::where('student_id', $request->id)
      ->where('subject_id', '=', Session::get('subjectid'))
      ->update(['mark6' => $request->mark]);



    }

    function viewAllResult($id){
      $res = DB::table('rms_students')
      ->join('rms_results','rms_students.id', 'rms_results.student_id')
      ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
      ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
      //->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
      ->where('rms_subjects.id','=',$id)
      ->get();
      return view('/marks.allresult',['res'=>$res]);
    }
}
