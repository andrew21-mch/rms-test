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

      $test = Rms_result::where('student_id', $request->id)
      ->where('subject_id', Session::get('subjectid'))
      ->where('sequence_id',  1)
      ->get();
      if($test->first())
      {
        return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Results Already Exist </div>';
      }
      elseif(!$test->first()){
      $result = new Rms_result;
      $result->student_id = $request->id;
      $result->class_id = $request->class_id;
      $result->sequence_id = 1;
      $result->subject_id = Session::get('subjectid');
      $result->mark1 = $request->mark;
      $result->academic_year = (now()->year);
      $result->teacher_id = Session::get('userid');
          if($result->save())
          {
            return '<div style="color:green; background-color:smoke; width: 100px; padding:4px"><h2>Results Saved</h2> </div>';
          }
          else{
            return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Something Went Wrong Please try again </div>';

          }
        }


    }
    function updateFirstSequence(Request $request){
      if(
        Rms_result::where('student_id', $request->id)
      ->where('subject_id', '=', Session::get('subjectid'))
      ->update(['mark1' => $request->mark])
      ){
        return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Saved </div>';
      }
      else{
        return '<div style="color:green; background-color:smoke; width: 100px; padding:4px"><h1>An Error Occured. Please try again</h1> </div>';
      }
    }

    function insertSecondSequence(Request $request){
      if(
        Rms_result::where('student_id', $request->id)
      ->where('subject_id', '=', Session::get('subjectid'))
      ->update(['mark2' => $request->mark])
      ){
        return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Saved </div>';
      }
      else{
        $test = Rms_result::where('student_id', $request->id)
        ->where('subject_id', Session::get('subjectid'))
        ->where('sequence_id',  2)
        ->get();
        if($test->first())
        {
          return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Results Already Exist </div>';
        }
        elseif(!$test->first()){
        $result = new Rms_result;
        $result->student_id = $request->id;
        $result->class_id = $request->class_id;
        $result->sequence_id = 2;
        $result->subject_id = Session::get('subjectid');
        $result->mark2 = $request->mark;
        $result->academic_year = (now()->year);
        $result->teacher_id = Session::get('userid');
            if($result->save())
            {
              return '<div style="color:green; background-color:smoke; width: 100px; padding:4px"><h2>Results Saved</h2> </div>';
            }
            else{
              return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Something Went Wrong Please try again </div>';

            }
          }
      }

      //$result->save();


    }

    function insertThirdSequence(Request $request){

      if(
        Rms_result::where('student_id', $request->id)
      ->where('subject_id', '=', Session::get('subjectid'))
      ->update(['mark3' => $request->mark])
      ){
        return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Saved </div>';
      }
      else{
          $test = Rms_result::where('student_id', $request->id)
          ->where('subject_id', Session::get('subjectid'))
          ->where('sequence_id',  2)
          ->get();
          if($test->first())
          {
            return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Results Already Exist </div>';
          }
          elseif(!$test->first()){
          $result = new Rms_result;
          $result->student_id = $request->id;
          $result->class_id = $request->class_id;
          $result->sequence_id = 3;
          $result->subject_id = Session::get('subjectid');
          $result->mark3 = $request->mark;
          $result->academic_year = (now()->year);
          $result->teacher_id = Session::get('userid');
              if($result->save())
              {
                return '<div style="color:green; background-color:smoke; width: 100px; padding:4px"><h2>Results Saved</h2> </div>';
              }
              else{
                return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Something Went Wrong Please try again </div>';

              }
            }
      }


    }

    function insertFourthSequence(Request $request){
      if(
        Rms_result::where('student_id', $request->id)
      ->where('subject_id', '=', Session::get('subjectid'))
      ->update(['mark4' => $request->mark])
      ){
        return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Saved </div>';
      }
      else{
        $test = Rms_result::where('student_id', $request->id)
        ->where('subject_id', Session::get('subjectid'))
        ->where('sequence_id',  4)
        ->get();
        if($test->first())
        {
          return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Results Already Exist </div>';
        }
        elseif(!$test->first()){
        $result = new Rms_result;
        $result->student_id = $request->id;
        $result->class_id = $request->class_id;
        $result->sequence_id = 4;
        $result->subject_id = Session::get('subjectid');
        $result->mark4 = $request->mark;
        $result->academic_year = (now()->year);
        $result->teacher_id = Session::get('userid');
            if($result->save())
            {
              return '<div style="color:green; background-color:smoke; width: 100px; padding:4px"><h2>Results Saved</h2> </div>';
            }
            else{
              return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Something Went Wrong Please try again </div>';

            }
          }
      }


    }

    function insertFifthSequence(Request $request){

      if(
        Rms_result::where('student_id', $request->id)
      ->where('subject_id', '=', Session::get('subjectid'))
      ->update(['mark5' => $request->mark])
      ){
        return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Saved </div>';
      }
      else{
        $test = Rms_result::where('student_id', $request->id)
        ->where('subject_id', Session::get('subjectid'))
        ->where('sequence_id',  5)
        ->get();
        if($test->first())
        {
          return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Results Already Exist </div>';
        }
        elseif(!$test->first()){
        $result = new Rms_result;
        $result->student_id = $request->id;
        $result->class_id = $request->class_id;
        $result->sequence_id = 5;
        $result->subject_id = Session::get('subjectid');
        $result->mark5 = $request->mark;
        $result->academic_year = (now()->year);
        $result->teacher_id = Session::get('userid');
            if($result->save())
            {
              return '<div style="color:green; background-color:smoke; width: 100px; padding:4px"><h2>Results Saved</h2> </div>';
            }
            else{
              return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Something Went Wrong Please try again </div>';

            }
          }
      }

    }

    function insertSixthSequence(Request $request){

      if(
        Rms_result::where('student_id', $request->id)
      ->where('subject_id', '=', Session::get('subjectid'))
      ->update(['mark6' => $request->mark])
      ){
        return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Saved </div>';
      }
      else{
        $test = Rms_result::where('student_id', $request->id)
        ->where('subject_id', Session::get('subjectid'))
        ->where('sequence_id',  6)
        ->get();
        if($test->first())
        {
          return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Results Already Exist </div>';
        }
        elseif(!$test->first()){
        $result = new Rms_result;
        $result->student_id = $request->id;
        $result->class_id = $request->class_id;
        $result->sequence_id = 6;
        $result->subject_id = Session::get('subjectid');
        $result->mark6 = $request->mark;
        $result->academic_year = (now()->year);
        $result->teacher_id = Session::get('userid');
            if($result->save())
            {
              return '<div style="color:green; background-color:smoke; width: 100px; padding:4px"><h2>Results Saved</h2> </div>';
            }
            else{
              return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Something Went Wrong Please try again </div>';

            }
          }
      }


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
    }}

    // function testaverages(){
    //   $marks = Rms_result::select('student_id', 'mark1','mark2','name')
    //   ->join('rms_subjects','rms_subjects.id', 'rms_results.subject_id')->orderBy('student_id')->get();
    //
    //   $ma = 0;
    //   $mark1 = 0;
    //   $mark2 = 0;
    //   $coef = 0;
    //   foreach($marks as $mark){
    //     $ma = $ma + $mark['student_id'];
    //
    //     $mark1 = $mark1 + $mark['mark1'];
    //     $mark2 = $mark2 + $mark['mark2'];
    //
    //     echo $mark['student_id']." ".$mark['name']."<hr>";
    //
    //
    // }
    // echo "Mark1 Total"." ________"."Mark2 Total"."<br>";
    // echo $mark1 ."___________________". $mark2;
    //
