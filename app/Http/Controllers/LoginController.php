<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Rms_teacher;
use App\Models\Rms_log;
use Session;
use Carbon;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        //get the data from the teachers table)
        $data = Rms_teacher::where(['email'=>$request->email, 'password'=>$request->password])->first();
        $log = new Rms_log;
        if(!$data){
          return view('auth.login');
        }
          elseif($data && $data['role']==100){
            $request->session()->put('user',$data['teacher_last_name']);
            $request->session()->put('userid',$data['id']);
            $log->teacher_id = $data['id'];
            $log->login_date = now();
            $log->login_time = now();
            $log->save();
            $request->session()->put('subjectid',$data['subject_id']);
            $request->session()->put('user1',$data['role']);
            return view('teachers_dashboard',['data'=>$data]);
          }
          else{
            $request->session()->put('user',$data['teacher_last_name']);
            $request->session()->put('userid',$data['id']);
            $log->teacher_id = $data['id'];
            $log->login_date = now();
            $log->login_time = now();
            $log->save();
            $request->session()->put('user1',$data['role']);
            $request->session()->put('subjectid',$data['subject_id']);

            return view('admin_dashboard',['data'=>$data]);
          }
        }

        function logout(){
          if(Session::has('user')){

            Session::pull('user');
            Session::pull('subjectid');
            Session::pull('userid');

            return redirect('/');
          }
        }

}
