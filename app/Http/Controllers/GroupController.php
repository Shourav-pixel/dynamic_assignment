<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enroll;
use App\Models\Groups;
use DB;

class GroupController extends Controller
{
    public function create()
    {
        
        $enrolls= DB:: table('enrolls')
        ->where('status', '=',NULL)
        ->get();
       // dd($enrolls);
        return view('dashboard.teacher.grp_create',compact('enrolls'));
    }
    public function store(Request $r){
        $name = $r->name;
        $member = $r->member;
        $mem1=NULL;
        $mem2=NULL;
        $mem3=NULL;
        $size =sizeof($r->enroll_id);
        if($size>0)
         $mem1 = $r->enroll_id[0];
        if($size>1)
        $mem2 = $r->enroll_id[1];
        if($size>2)
        $mem3 = $r->enroll_id[2];
        
        $obj = new Groups();
        $obj->name = $name;
        $obj->member = $member;
        $obj->member1 =$mem1;
        $obj->member2 =$mem2;
        $obj->member3 = $mem3;
        //dd($obj->mem2);
        if($obj->save())
        {
            if($mem1!=NULL)
            {$affected = DB::table('enrolls')
              ->where('id', $mem1)
              ->update(['status' => 1]);
            }
            if($mem2!=NULL)
            {$affected = DB::table('enrolls')
              ->where('id', $mem2)
              ->update(['status' => 1]);
            }
            if($mem3!=NULL)
            {$affected = DB::table('enrolls')
              ->where('id', $mem3)
              ->update(['status' => 1]);
            }
           return redirect()->back()->with('msg','Succesfully Inserted');
        }

    }
    public function show()
    {
        $courses = DB::table('groups')
        ->get();
        return view('dashboard.teacher.all',compact('courses'));
    }
    public function editGroup($id)
{
    $courses= DB:: table('groups')
                ->where('id', '=',$id)
                ->first();
   
    return view('dashboard.teacher.edit',compact('courses'));
    
}
}
