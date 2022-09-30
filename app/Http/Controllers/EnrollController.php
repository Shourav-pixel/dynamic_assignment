<?php

namespace App\Http\Controllers;
use App\Models\course;
use App\Models\Enroll;

use Illuminate\Http\Request;
use DB;

class EnrollController extends Controller
{
    public function create()
    {
        
        $courses = course::all();
        return view('dashboard.student.enrollcreate',compact('courses'));
    }
    public function store(Request $r){
        $name = $r->name;
        
        $student_id = $r->student_id;
        $batch = $r->batch;
        $session = $r->session;
        $course_title = $r->course_title;
        $section = $r->section;

        $obj = new Enroll();
        $obj->name = $name;
        $obj->student_id = $student_id;
        $obj->batch  = $batch ;
       
        $obj->session = $session;
        $obj->course_title=$course_title;
        $obj->section = $section;
        $obj->save();

        
      return redirect()->back()->with('msg','Succesfully Enrolled');
       
    }
    public function all()
    {
        $enroll = Enroll::all();
        $courses = course::all();
        return view('dashboard.teacher.showenroll',compact('enroll','courses'));
    }
}
