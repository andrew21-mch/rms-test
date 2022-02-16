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
      $data1 = DB::table('rms_results')
      ->join('rms_students','rms_students.id', 'rms_results.student_id')
      ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
      ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
      ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
      ->join('averages', 'averages.id', 'rms_results.average_id')
      ->where('rms_students.id','=',$id)
      ->orderBy('coefficient', 'desc')
      ->get();
      $ranks = reportcardController::avg($id);
     // return $ranks;
      return view('report.report1', ['data1'=>$data1, 'rank1'=> $ranks]);
      // }

    }
    public function getStudentReport2($id){
      $data1 = DB::table('rms_results')
      ->join('rms_students','rms_students.id', 'rms_results.student_id')
      ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
      ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
      ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
      ->join('averages', 'averages.id', 'rms_results.average_id')
      ->where('rms_students.id','=',$id)
      ->orderBy('coefficient', 'desc')
      ->get();

      


      return view('report.report2', ['data1'=>$data1]);
    }
    public function getStudentReport3($id){
      $data1 = DB::table('rms_results')
      ->join('rms_students','rms_students.id', 'rms_results.student_id')
      ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
      ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
      ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
      ->join('averages', 'averages.id', 'rms_results.average_id')
      ->where('rms_students.id','=',$id)
      ->orderBy('coefficient', 'desc')
      ->get();

      return view('report.report3', ['data1'=>$data1]);
    }

//ts and the average of each student

    public function avg($id){
      $student = Rms_result::where('student_id', $id)->get();
      $data1 = DB::table('averages')->join('rms_students', 'rms_students.id', 'averages.student_id')
      ->where('class_id', $student[0]->class_id)
      ->orderBy('avg1', 'ASC')->get();

      $ranked = array();
      
      foreach($data1 as $data){
        $ranked[$data->student_id] = $data->avg1;
      }
      
      for ($i = 1; $i <= count($ranked); $i++){
        if($ranked[$i] = $id){
          $rank = array($i);
          return $rank;
        }

      }
      
      
      
    }
}
