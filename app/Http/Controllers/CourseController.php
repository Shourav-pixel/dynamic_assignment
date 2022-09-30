<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;

class CourseController extends Controller
{
    public function create()
    {
        return view('dashboard.teacher.create');
    }
    public function store(Request $r){
        $course_title = $r->course_title;
        $course_code = $r->course_code;
        $course_credit = $r->course_credit;
        $course_type = $r->course_type;
        DB::table('courses')->insert([
            'course_title' => $course_title,
            'course_code'=>$course_code,
            'course_credit'=>$course_credit,
            'course_type'=>$course_type
            

        ]);
        return redirect('show-course');
    }
    public function show()
    {
        $courses = DB::table('courses')
        ->get();
        return view('dashboard.teacher.all',compact('courses'));
    }
    public function edit($id)
{
    $courses= DB:: table('courses')
                ->where('id', '=',$id)
                ->first();
   
    return view('dashboard.teacher.edit',compact('courses'));
    
}
    public function update(Request $r,$id)
    {
        $course_title = $r->course_title;
        $course_code = $r->course_code;
        $course_credit = $r->course_credit;
        $course_type = $r->course_type;
    
        $courses = DB::table('courses')
              ->where('id', $id)
              ->update([ 
              'course_title' => $course_title,
              'course_code'=>$course_code,
              'course_credit'=>$course_credit,
              'course_type'=>$course_type,
    
    
                        ]);
            return redirect()->back()->with('msg','Updated succesfully');
    
}
    
}
