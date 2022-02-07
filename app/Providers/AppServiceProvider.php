<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\Rms_student;
use App\Models\Rms_teacher;
use Illuminate\Support\Facades\URL;
use App\Models\Rms_subject;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view::share('class',DB::table('rms_classes')->get());
        view::share('data', DB::table('rms_students')->get());
        view::share('count',DB::table('rms_students')->count());
        view::share('subject1', DB::table('rms_subjects')->get());
        view::share('subject', Rms_subject::where('subject_code', Null)->get());//get subjects
        view::share('option', DB::table('rms_options')->get());
        view::share('teacher',DB::table('rms_teachers')->get());
        view::share('countteach', Rms_teacher::count());
        view::share('teachersubjects', DB::table('rms_subjects')
        ->join('rms_teachers','rms_teachers.id','rms_subjects.teacher_id')
        ->get());

        view::share('count1',Rms_student::where('class_id',1)->count());
        view::share('count1g',Rms_student::where('gender','Female')->where('class_id', 1)->count());

        view::share('count2',Rms_student::where('class_id',2)->count());
        view::share('count2g',Rms_student::where('gender','Female')->where('class_id', 2)->count());


        view::share('count3',Rms_student::where('class_id',3)->count());
        view::share('count3g',Rms_student::where('gender','Female')->where('class_id', 3)->count());


        view::share('count4',Rms_student::where('class_id',4)->count());
        view::share('count4g',Rms_student::where('gender','Female')->where('class_id', 4)->count());

        view::share('count5',Rms_student::where('gender',4)->count());
        view::share('count5g',Rms_student::where('gender','Female')->where('class_id', 5)->count());

        view::share('count5',Rms_student::where('class_id',5)->count());
        view::share('count6',Rms_student::where('class_id',6)->count());
        view::share('count6g',Rms_student::where('gender','Female')->where('class_id', 6)->count());

        view::share('count7',Rms_student::where('class_id',7)->count());
        view::share('count7g',Rms_student::where('gender','Female')->where('class_id', 7)->count());



    }
}
