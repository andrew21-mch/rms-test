<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rms_student;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
  public function getstudent(){
    $data = DB::table('rms_students')->get();
    return view('/report',['data'=>$data]);
  }
  // public function countform1(){
  //   $count1 = Rms_student::where('class_id',1)->count();
  //   return view('dashboards.admin_dashboard', ['count1'=>$count1]);
  // }
  //   public function countform2(){
  //     $count2 = Rms_student::where('class_id',2)->count();
  //     return view('dashboards.admin_dashboard', ['count2'=>$count2]);
  //   }
  //
  //
  // public function countform3(){
  //   $count3 = Rms_student::where('class_id',3)->count();
  //   return view('dashboards.admin_dashboard', ['count3'=>$count3]);
  // }
  // public function countform4(){
  //   $count4 = Rms_student::where('class_id',4)->count();
  //   return view('dashboards.admin_dashboard', ['count4'=>$count4]);
  // }
  // public function countform5(){
  //   $count5 = Rms_student::where('class_id',5)->count();
  //   return view('dashboards.admin_dashboard', ['count'=>$count]);
  // }
  // public function countTeachers(){
  //   $count5 = Rms_student::count();
  //   return view('dashboards.admin_dashboard', ['count'=>$count]);
  // }

  public function viewStudents($id){
    $data = Rms_student::find($id);
    return view('viewstudent',['data'=>$data]);
  }

  public function deleteStudents($id){
    $data_to_delete = Rms_student::find($id);
    $first_name = $data_to_delete['first_name'];
    if($data_to_delete->delete()){

      return redirect('delete_success');
    }
    else{
      return redirect('delete_error');
    }
  }

  public function editStudents(){
    return Rms_student::all();
  }
  public function getclass(){
    return view('clases');
  }

  function registStudent(Request $request){
    $request->validate([
      'student_first_name'=>'required',
      'student_last_name'=>'required',
      'date_of_birth'=>'required',
      'place_of_birth'=>'required',
      'student_region'=>'required',
      'student_class'=>'required',
      'student_option'=>'required',
      'student_gender'=>'required',
      'fathers_name'=>'required',
      'mothers_name'=>'required',
      'parents_contact'=>'required'
    ]);

    //student table
    $student = new Rms_student;
    $student->first_name = $request->student_first_name;
    $student->last_name = $request->student_last_name;
    $student->date_of_birth = $request->date_of_birth;
    $student->place_of_birth = $request->place_of_birth;
    $student->gender = $request->student_gender;
    $student->fathers_name = $request->fathers_name;
    $student->mothers_name = $request->mothers_name;
    $student->parents_contact = $request->parents_contact;
    $student->option_id = $request->student_option;
    $student->class_id = $request->student_class;
    $student->Region = $request->student_region;

    if($student->save()){
      $request->session()->flash("status","You have succesffully added $request->student_first_name");
      return redirect('student');
    }
    else{
      return view('registerStudent');
        }
  }

  function search(Request $request){
    $searched_item = Rms_student::where('first_name', 'like', '%'.$request->input('search').'%')
    ->orWhere('last_name', 'like', '%'.$request->input('search').'%')
    ->orWhere('gender', 'like', '%'.$request->input('search').'%')
    ->orWhere('class_id', 'like', '%'.$request->input('search').'%')

    ->get();
    return view('search_page',['searched_result'=>$searched_item]);
  }
}
