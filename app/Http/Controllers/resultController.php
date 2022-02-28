<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rms_student;
use App\Models\Rms_result;
use App\Models\Average;
use Illuminate\Support\Facades\Session;


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

    function avg1($id){
      $data = DB::table('rms_results')
            ->join('rms_students','rms_students.id', 'rms_results.student_id')
            ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
            ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
            ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
            ->where('rms_students.id','=',$id)
            ->orderBy('coefficient', 'desc')
            ->get();
        
  
              //Calculate Average and insert into the database
              $sum = 0;
              $coef = 0;
              foreach($data as $data){
                if($data->mark1 == NULL){
                  $data->mark1 = $data->mark2;
                }
                if($data->mark2 == NULL && $data->mark2!==0){
                  $data->mark2 = $data->mark1;
                }
                $sum = $sum + (($data->mark1 + $data->mark2)/2 * $data->coefficient);
                $coef = $coef + $data->coefficient;
              }
              $avg = $sum/$coef;
              if( Average::where('student_id', $id)
              ->update(['avg1' => $avg])){
                  
              $data1 = DB::table('rms_results')
                ->join('rms_students','rms_students.id', 'rms_results.student_id')
                ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
                ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
                ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
                ->join('averages', 'averages.id', 'rms_results.average_id')
                ->where('rms_students.id','=',$id)
                ->orderBy('coefficient', 'desc')
                ->get();
                $d = DB::table('averages')->where('student_id',$id)->first();
                $avg_id = $d->id;// initially it was $d->id
                  Rms_result::where('student_id', $id)
                  ->update(['average_id' => $d->id]);// initially it was $d->id]);
                  Session::put('mark_success', 'Mark Saved');
                  return redirect()->back();
  
              }
              else{
                $av =  new Average;
                $av->student_id = $id;
                $av->avg1 = $avg;
                if($av->save()){
                  $d = DB::table('averages')->where('student_id',$id)->first();
                  $avg_id = $d->id;// initially it was $d->id
                  Rms_result::where('student_id', $id)
                  ->update(['average_id' => $avg_id]);
                }
                $data1 = DB::table('rms_results')
                ->join('rms_students','rms_students.id', 'rms_results.student_id')
                ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
                ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
                ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
                ->join('averages', 'averages.id', 'rms_results.average_id')
                ->where('rms_students.id','=',$id)
                ->orderBy('coefficient', 'desc')
                ->get();
                $d = DB::table('averages')->where('student_id',$id)->first();
                print_r($d);
                $avg_id = $d->id;
                  Rms_result::where('student_id', $id)
                  ->update(['average_id' => $avg_id]);
            
                  Session::put('mark_success', 'Mark Saved');
                  return redirect()->back();
              }
    }
  
    function avg2($id){
      $data = DB::table('rms_results')
            ->join('rms_students','rms_students.id', 'rms_results.student_id')
            ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
            ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
            ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
            ->where('rms_students.id','=',$id)
            ->orderBy('coefficient', 'desc')
            ->get();
        
  
              //Calculate Average and insert into the database
              $sum = 0;
              $coef = 0;
              foreach($data as $data){
                $sum = $sum + (($data->mark3 + $data->mark4)/2 * $data->coefficient);
                $coef = $coef + $data->coefficient;
              }
              $avg = $sum/$coef;
              if( Average::where('student_id', $id)
              ->update(['avg2' => $avg])){
                  
              $data1 = DB::table('rms_results')
                ->join('rms_students','rms_students.id', 'rms_results.student_id')
                ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
                ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
                ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
                ->join('averages', 'averages.id', 'rms_results.average_id')
                ->where('rms_students.id','=',$id)
                ->orderBy('coefficient', 'desc')
                ->get();
                $d = DB::table('averages')->where('student_id',$id)->first();
                $avg_id = $d->id;
                  Rms_result::where('student_id', $id)
                  ->update(['average_id' => $d->id]);
                  Session::put('mark_success', 'Mark Saved');
                  return redirect()->back();
              }
              else{
                $av =  new Average;
                $av->student_id = $id;
                $av->avg2 = $avg;
                if($av->save()){
                  $d = DB::table('averages')->where('student_id',$id)->first();
                  $avg_id =  $d->id;// initially it was $d->id
                  Rms_result::where('student_id', $id)
                  ->update(['average_id' => $avg_id]);
                }
                $data1 = DB::table('rms_results')
                ->join('rms_students','rms_students.id', 'rms_results.student_id')
                ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
                ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
                ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
                ->join('averages', 'averages.id', 'rms_results.average_id')
                ->where('rms_students.id','=',$id)
                ->orderBy('coefficient', 'desc')
                ->get();
                $d = DB::table('averages')->where('student_id',$id)->first();
                $avg_id = $d->id;// initially it was $d->id
                  Rms_result::where('student_id', $id)
                  ->update(['average_id' => $avg_id]);
                  Session::put('mark_success', 'Mark Saved');
                  return redirect()->back();
              }
    }
  
    function avg3($id){
      $data = DB::table('rms_results')
            ->join('rms_students','rms_students.id', 'rms_results.student_id')
            ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
            ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
            ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
            ->where('rms_students.id','=',$id)
            ->orderBy('coefficient', 'desc')
            ->get();
        
  
              //Calculate Average and insert into the database
              $sum = 0;
              $coef = 0;
              foreach($data as $data){
                $sum = $sum + (($data->mark5 + $data->mark6)/2 * $data->coefficient);
                $coef = $coef + $data->coefficient;
              }
              $avg = $sum/$coef;
              if( Average::where('student_id', $id)
              ->update(['avg3' => $avg])){
                  
              $data1 = DB::table('rms_results')
                ->join('rms_students','rms_students.id', 'rms_results.student_id')
                ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
                ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
                ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
                ->join('averages', 'averages.id', 'rms_results.average_id')
                ->where('rms_students.id','=',$id)
                ->orderBy('coefficient', 'desc')
                ->get();
                $d = DB::table('averages')->where('student_id',$id)->first();
                $avg_id = $d->id;// initially it was $d->id
                  Rms_result::where('student_id', $id)
                  ->update(['average_id' => $d->id]);
                  Session::put('mark_success', 'Mark Saved');
                  return redirect()->back();
              }
              else{
                $av =  new Average;
                $av->student_id = $id;
                $av->avg3 = $avg;
                if($av->save()){
                  $d = DB::table('averages')->where('student_id',$id)->first();
                  $avg_id = $d->id;// initially it was $d->id
                  Rms_result::where('student_id', $id)
                  ->update(['average_id' => $avg_id]);
                }
                $data1 = DB::table('rms_results')
                ->join('rms_students','rms_students.id', 'rms_results.student_id')
                ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
                ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
                ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
                ->join('averages', 'averages.id', 'rms_results.average_id')
                ->where('rms_students.id','=',$id)
                ->orderBy('coefficient', 'desc')
                ->get();
                $d = DB::table('averages')->where('student_id',$id)->first();
                $avg_id = $d->id;// initially it was $d->id
                  Rms_result::where('student_id', $id)
                  ->update(['average_id' => $avg_id]);
                    Session::put('mark_success', 'Mark Saved');
                    return redirect()->back();
              }
    }
    function insertFirstSequence(Request $request){
      if($request->mark > 20 ){
        $request->session()->put('mark_error', "Mark Can not be greater than 20");
        return redirect()->back();
      }
      if(
        Rms_result::where('student_id', $request->id)
        ->where('subject_id', '=', Session::get('subjectid'))
        ->update(['mark1' => $request->mark]))
        {
          return resultController::avg1($request->id);
        }
      else{
      $result = new Rms_result;
      $result->student_id = $request->id;
      $result->class_id = $request->class_id;
      $result->sequence_id = 1;
      $result->subject_id = Session::get('subjectid');
      $result->academic_year = (now()->year);
      $result->teacher_id = Session::get('userid');
      $result->mark1 = $request->mark;
      
        if($result->save())
        {
          return resultController::avg1($request->id);
        }
        else{
          return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Something Went Wrong Please try again </div>';

        }
      }


    }

    function insertSecondSequence(Request $request){
      if($request->mark > 20 ){
        $request->session()->put('mark_error', "Mark Can not be greater than 20");
        return redirect()->back();
      }
      if(
        Rms_result::where('student_id', $request->id)
      ->where('subject_id', '=', Session::get('subjectid'))
      ->update(['mark2' => $request->mark]))
      {
        return resultController::avg1($request->id);
      }
      
      else{
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
              return resultController::avg1($request->id);
            }
            else{
              return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Something Went Wrong Please try again </div>';

            }
          }

      //$result->save();


    }

    function insertThirdSequence(Request $request){
      if($request->mark > 20 ){
        $request->session()->put('mark_error', "Mark Can not be greater than 20");
        return redirect()->back();
      }
      if(
        Rms_result::where('student_id', $request->id)
      ->where('subject_id', '=', Session::get('subjectid'))
      ->update(['mark3' => $request->mark])
      ){
        return resultController::avg2($request->id);
      }
      else{
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
                return resultController::avg2($request->id);
              }
              else{
                return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Something Went Wrong Please try again </div>';

              }
            }
      }

    function insertFourthSequence(Request $request){
      if($request->mark > 20 ){
        $request->session()->put('mark_error', "Mark Can not be greater than 20");
        return redirect()->back();
      }
      if(
        Rms_result::where('student_id', $request->id)
      ->where('subject_id', '=', Session::get('subjectid'))
      ->update(['mark4' => $request->mark])
      ){
        return resultController::avg2($request->id);
      }
      else{        
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
              return resultController::avg2($request->id);
            }
            else{
              return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Something Went Wrong Please try again </div>';

            }
          }
      }

    function insertFifthSequence(Request $request){
      if($request->mark > 20 ){
        $request->session()->put('mark_error', "Mark Can not be greater than 20");
        return redirect()->back();
      }
      if(
        Rms_result::where('student_id', $request->id)
      ->where('subject_id', '=', Session::get('subjectid'))
      ->update(['mark5' => $request->mark])
      ){
        return resultController::avg3($request->id);
      }
      else{
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
              return resultController::avg3($request->id);
            }
            else{
              return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Something Went Wrong Please try again </div>';

            }
          }
      }


    function insertSixthSequence(Request $request){
      if($request->mark > 20 ){
        $request->session()->put('mark_error', "Mark Can not be greater than 20");
        return redirect()->back();
      }

      if(
        Rms_result::where('student_id', $request->id)
      ->where('subject_id', '=', Session::get('subjectid'))
      ->update(['mark6' => $request->mark])
      ){
        return resultController::avg2($request->id);
      }
      else{
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
              return resultController::avg3($request->id);
            }
            else{
              return '<div style="color:green; background-color:smoke; width: 100px; padding:4px">Something Went Wrong Please try again </div>';

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