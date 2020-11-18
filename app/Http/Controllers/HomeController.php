<?php

namespace App\Http\Controllers;

use App\Curriculum;
use App\Lesson;
use App\Role;
use App\Student;
use App\TestGenerateGroupOffline;
use App\TestGenerateOffline;
use App\TestGroup;
use App\TestShift;
use App\User;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_lecturers      =   Role::where('name','Giangvien')->first()->users()->count();
        $all_students       =   Student::where('state',1)->count();
        $all_course_accepted=   Curriculum::where('states',1)->count();
        $all_courses        =   Curriculum::count();
        $all_lessons        =   Lesson::where('states',1)->count();
        $all_test_off       =   TestGenerateOffline::count();
        $all_test_off_used  =   TestGenerateOffline::where('state', '<>', 0)->count();
       /* $id_gianvien        =   Role::where('name','Giangvien')->first()->users()->pluck('id');
        $top_lecturers      =   User::whereIn('id',$id_gianvien)
                                ->withCount(['Course' => function ($query) {
                                    $query->where('states', 1);
                                }])
                                ->orderBy('Course_count', 'DESC')->limit(5)->get();*/
        $top_lecturers      =   User::withCount(['Course' => function ($query) {
                                    $query->where('states', 1);
                                }])
                                ->orderBy('Course_count', 'DESC')->limit(5)->get();
        $top_students       =   Student::withCount(['OfflineTest'])->orderBy('offline_test_count','DESC')->limit(5)->get();
        return view('backend.system.authentication.home',
            compact('all_lecturers',
                'all_students',
                'all_course_accepted',
                'all_courses',
                'all_lessons',
                'all_test_off',
                'all_test_off_used',
                'top_lecturers',
                'top_students'));
    }
}
