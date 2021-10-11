<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rms_result;

class reportcardController extends Controller
{
    public function getStudentReport1($id){
      $data1 = DB::table('rms_results')
      ->join('rms_students','rms_students.id', 'rms_results.student_id')
      ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
      ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
      ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
      ->where('rms_students.id','=',$id)
      ->get();

      return view('report.report1', ['data1'=>$data1]);
    }
    public function getStudentReport2($id){
      $data1 = DB::table('rms_results')
      ->join('rms_students','rms_students.id', 'rms_results.student_id')
      ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
      ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
      ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
      ->where('rms_students.id','=',$id)
      ->get();

      return view('report.report2', ['data1'=>$data1]);
    }
    public function getStudentReport3($id){
      $data1 = DB::table('rms_results')
      ->join('rms_students','rms_students.id', 'rms_results.student_id')
      ->join('rms_classes', 'rms_classes.id', 'rms_results.class_id')
      ->join('rms_subjects', 'rms_subjects.id', 'rms_results.subject_id')
      ->join('rms_teachers', 'rms_teachers.id', 'rms_results.teacher_id')
      ->where('rms_students.id','=',$id)
      ->get();

      return view('report.report3', ['data1'=>$data1]);
    }
}
