<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rms_subject;
use App\Models\Rms_teacher;
use Session;


class teacherController extends Controller
{
    function subject($id){
      return Rms_subject::join('rms_teachers', 'rms_subjects.teacher_id', 'rms_teachers.id')
      ->find($id);;
    }

    function createAccount(Request $request){
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|unique:rms_teachers',
        'password' => 'required|min:6|max:12',
        'password_confirmation' => 'required|min:6|max:12'
      ]);
      if($request->password == $request->password_confirmation)
      {
        $teacher = new Rms_teacher;
        $teacher->teacher_first_name = $request->first_name;
        $teacher->teacher_last_name =  $request->last_name;
        $teacher->email = $request->email;
        $teacher->subject_id = $request->subject;
        $teacher->option_id = $request->option;
        $teacher->teacher_phone = $request->phone;
        $teacher->password = $request->password;

        if ('user1'==200) {
          $teacher->role = $request->role;
        }

        if($teacher->save()){
          return view('auth.register',['data','successfully Registered']);

        }
      }
      else{
        return '<script type="text/javascript">alert("Passwords Do not match!");</script>';
      }
    // function countTeachers()
    {
    //   $teachernum = Rms_teacher::count();
    //
    // }
    function profileview($id){
      $teacher = Rms_teacher::join('rms_subjects','rms_teachers.subject_id', 'rms_subjects.id')->find($id);
      return view('viewteacher',['teacher'=>$teacher]);
    }
    function profileupdate(Request $request){
       if($teacher = Rms_teacher::where('id', session::get('userid'))
        ->update([
             'teacher_first_name' => $request->get('first_name'),
             'teacher_last_name'       => $request->get('last_name'),
             'email'=>$request->get('email'),
             'teacher_phone' => $request->get('phone')
           ])){
             //$request->session()->flash('status', 'Account succesffully Updated!');

             if($subject = Rms_subject::where('id',$request->get('subject'))
             ->update([
               'teacher_id'=>session::get('userid')
             ]))
               {
                 return '<script type="text/javascript">alert("Account Updated");</script>';
               }
          }
        }
      }
    }
  }
