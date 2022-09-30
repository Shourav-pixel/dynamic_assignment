<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\Groups;
use App\Models\Assignment;
use DB;
use Image;
class AssignmentController extends Controller
{
    public function create()
    {
        $courses= course::all();
        $groups= Groups::all();
        return view('dashboard.teacher.assignment_create', [
            'courses' => $courses,
            'groups' => $groups 
        ]);
    }

    public function store(Request $r){
        
       //dd($r->input('group_id'));
        if($originalImage=$r->file('filename')){
          
              
                $thumbnailImage = Image::make($originalImage);
                $thumbnailPath = public_path().'/thumbnail/';
                $originalPath = public_path().'/images/';
                $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
                $thumbnailImage->resize(150,150);
                $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 

                $imagemodel= new Assignment();
                $imagemodel->name = $r->input('name');
                $imagemodel->question = $r->input('question');
                $imagemodel->filename=time().$originalImage->getClientOriginalName();
            
                $imagemodel->course_id= $r->input('course_id');
                $imagemodel->group_id = $r->input('group_id');
                $imagemodel->save();




    //     $assignment = new Assignment();
    //    if($r->file('filename'))
    //    {
    //     $file= $request->file('filename');
    //     $filename= date('YmdHi').$file->getClientOriginalName();
    //     $file-> move(public_path('public/uploads/student'), $filename);
    //     $data['filename']= $filename;

    //    $assignment->save();

      return redirect()->back()->with('msg','Succesfully Inserted');
    }
        
     
   
         //return redirect('show-course');
    }

    public function showallAssingment()
    {
        $assignment = Assignment::all();
        return view('dashboard.student.show_assignment',compact('assignment'));
    }
    
 

}
