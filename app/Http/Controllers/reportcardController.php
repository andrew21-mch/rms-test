<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rms_result;
use App\Models\Average;

class reportcardController extends Controller
{

  //Get the results and the average of each student
    public function getStudentReport1($id){
      if(count($data1 = DB::table('rms_results')
      ->join('rms_students','rms_students.id', 'rms_results.student_id')
      ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
      ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
      ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
      ->join('averages', 'averages.id', 'rms_results.average_id')
      ->where('rms_students.id','=',$id)
      ->orderBy('subject_code', 'ASC')
      ->get())){
        $ranks = reportcardController::avg1($id);
        $class_average = reportcardController::classAvg1($id);
     // return $ranks;
      return view('report.report1', ['data1'=>$data1, 'rank1'=> $ranks, 'class_average'=>$class_average]);
      }else{
        return view('/no_results_available');
      }
      
      // }

    }
    public function getStudentReport2($id){
      if(count($data1 = DB::table('rms_results')
      ->join('rms_students','rms_students.id', 'rms_results.student_id')
      ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
      ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
      ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
      ->join('averages', 'averages.id', 'rms_results.average_id')
      ->where('rms_students.id','=',$id)
      ->orderBy('subject_code', 'ASC')
      ->get())){
     
           // return $ranks;
        $ranks = reportcardController::avg2($id);
            //class average
        $class_average = reportcardController::classAvg2($id);
        return view('report.report2', ['data1'=>$data1, 'rank2'=> $ranks, 'class_average'=>$class_average]);
      }else{
        return view('/no_results_available');

      }
      // }
    }
    public function getStudentReport3($id){
      if(count($data1 = DB::table('rms_results')
      ->join('rms_students','rms_students.id', 'rms_results.student_id')
      ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
      ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
      ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
      ->join('averages', 'averages.id', 'rms_results.average_id')
      ->where('rms_students.id','=',$id)
      ->orderBy('subject_code', 'ASC')
      ->get())){
        $ranks = reportcardController::avg3($id);
        $class_average = reportcardController::classAvg3($id);
       // return $ranks;
        return view('report.report3', ['data1'=>$data1, 'rank3'=> $ranks, 'class_average'=>$class_average]);
      }
      else{
        return view('/no_results_available');

      }
     // }
    }

//ts and the average of each student

    public function avg1($id){
      $student = Rms_result::where('student_id', $id)->get();
      $data2 = DB::table('averages')->join('rms_students', 'rms_students.id', 'averages.student_id')
      ->where('class_id', $student[0]->class_id)
      ->orderBy('avg1', 'DESC')->get();

      $rankedid = array();
      $rankedval = array();
      
      foreach($data2 as $data){
        array_push($rankedid, $data->student_id);
        array_push($rankedval, $data->avg1);
      }
      $position = array_search($id, $rankedid) + 1;
      return $position;
      
    }

    public function avg2($id){
      $student = Rms_result::where('student_id', $id)->get();
      $data2 = DB::table('averages')->join('rms_students', 'rms_students.id', 'averages.student_id')
      ->where('class_id', $student[0]->class_id)
      ->orderBy('avg1', 'DESC')->get();

      $rankedid = array();
      $rankedval = array();
      
      foreach($data2 as $data){
        array_push($rankedid, $data->student_id);
        array_push($rankedval, $data->avg2);
      }
      $position = array_search($id, $rankedid) + 1;
      return $position;
      
    }

    public function avg3($id){
      $student = Rms_result::where('student_id', $id)->get();
      $data2 = DB::table('averages')->join('rms_students', 'rms_students.id', 'averages.student_id')
      ->where('class_id', $student[0]->class_id)
      ->orderBy('avg1', 'DESC')->get();

      $rankedid = array();
      $rankedval = array();
      
      foreach($data2 as $data){
        array_push($rankedid, $data->student_id);
        array_push($rankedval, $data->avg3);
      }
      $position = array_search($id, $rankedid) + 1;
      return $position;
      
    }

    function classAvg1($id){
      $student = Rms_result::where('student_id', $id)->get();
      $data2 = DB::table('averages')->join('rms_students', 'rms_students.id', 'averages.student_id')
      ->where('class_id', $student[0]->class_id)
      ->avg('avg1');
      return $data2;


    }

    function classAvg2($id){
      $student = Rms_result::where('student_id', $id)->get();
      $data2 = DB::table('averages')->join('rms_students', 'rms_students.id', 'averages.student_id')
      ->where('class_id', $student[0]->class_id)
      ->avg('avg2');
      return $data2;


    }

    function classAvg3($id){
      $student = Rms_result::where('student_id', $id)->get();
      $data2 = DB::table('averages')->join('rms_students', 'rms_students.id', 'averages.student_id')
      ->where('class_id', $student[0]->class_id)
      ->avg('avg3');
      return $data2;


    }
}
