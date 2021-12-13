<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\reportcardController;
use App\Http\Controllers\subjectController;
use App\Http\Controllers\classController;
use App\Http\Controllers\resultController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\logsController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\ContactController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//
if (App::environment('production')) {
    URL::forceScheme('https');
}
//views
Route::view('/form1', 'class.form1');
Route::view('/form2', 'class.form2');
Route::view('/form3', 'class.form3');
Route::view('/form4', 'class.form4');
Route::view('/form5', 'class.form5');
Route::view('/lowersixth', 'class.lowersixth');
Route::view('/uppersixth', 'class.uppersixth');
Route::view('/test', 'test');
Route::view('/index', 'home');
Route::view('/delete_success', 'errors_success.delete_student_success');
Route::view('/delete_error', 'errors_success.delete_student_error');



Route::view('/admin', 'admin_dashboard');
Route::view('/teacher','teachers_dashboard');
Route::view('/analytics','analytics');
Route::view('viewStudent','viewStudent');
Route::view('/', 'auth.login');
Route::view('/register', 'auth.register');
Route::view('/adminRegisterTeacher', 'auth.admin_register');
Route::view('/adminRegisterSubject', 'addsubject');
Route::view('/allresult', 'marks.allresult');
Route::view('/search_tips', 'search_tips');
Route::view('/contact_us','contact');

Route::view('/Action/registerStudent', 'registerStudent');
Route::view('/reportCard','reportCard');
Route::view('/viewsubject','viewsubject');
Route::view('/insert/insertmarks', 'insertMarks');
//get Routes

//view individual classes
//insert marks routes
Route::get('/insertmarks/first1', [resultController::class, 'getFirstres']);
Route::get('/insertmarks/seconds2', [resultController::class, 'getSecondres']);
Route::get('/insertmarks/thirds3', [resultController::class, 'getThirdres']);
Route::get('/insertmarks/fourths4', [resultController::class, 'getFourthres']);
Route::get('/insertmarks/fifths5', [resultController::class, 'getFifthres']);
Route::get('/insertmarks/sixths6', [resultController::class, 'getSixthres']);

Route::get('student',[studentController::class, 'getstudent']);
Route::get('teacherviewsubject/{id}', [teacherController::class, 'subject']);
Route::get('/profile_view/{id}', [teacherController::class, 'view_profile']);
Route::get('userlogout',[LoginController::class, 'logout']);
Route::get('count',[studentController::class, 'countTeachers']);
Route::get('view/classes',[studentController::class, 'getclass']);
Route::get('card1/{id}',[reportcardController::class,'getStudentReport1']);
Route::get('card2/{id}',[reportcardController::class,'getStudentReport2']);
Route::get('card3/{id}',[reportcardController::class,'getStudentReport3']);

Route::get('subjects', [subjectController::class, 'getsubject']);
Route::get('options',[classController::class,'getallOptions']);
Route::get('delete/{id}',[studentController::class, 'deleteStudents']);
Route::get('view/{id}',[studentController::class, 'viewStudents']);
Route::get('edit',[studentController::class, 'editStudents']);
Route::get('getResult/{id}',[resultController::class, 'getResult']);
Route::get('viewAllResult/{id}',[resultController::class, 'viewAllResult']);
Route::get('rResult/{id}',[reportcardController::class, 'test']);
Route::get('viewlogs',[logsController::class, 'viewlogs']);
Route::get('clearlogs',[logsController::class, 'clearlogs']);
Route::get('search',[studentController::class, 'search']);



//Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Post routes.
Route::post('userlogin',[LoginController::class, 'login']);
Route::post('/registStudent', [studentController::class, 'registStudent']);
Route::post('/registSubject', [subjectController::class, 'addsubject']);
Route::post('/create_account', [teacherController::class, 'createAccount']);
Route::post('insert_sequence1', [resultController::class, 'insertFirstSequence']);
Route::get('/update_sequence1/{id}', [resultController::class, 'updateFirstSequence']);
Route::post('insert_sequence2', [resultController::class, 'insertSecondSequence']);
Route::post('insert_sequence3', [resultController::class, 'insertThirdSequence']);
Route::post('insert_sequence4', [resultController::class, 'insertFourthSequence']);
Route::post('insert_sequence5', [resultController::class, 'insertFifthSequence']);
Route::post('insert_sequence6', [resultController::class, 'insertSixthSequence']);
Route::post('/update/{id}', [teacherController::class, 'profileupdate']);
Route::post('/report1',[subjectController::class, 'updatesubject']);
Route::get('/contactMe',[ContactController::class, 'contact']);




#aside test route;
Route::get('averages', [resultController::class, 'testaverages']);
