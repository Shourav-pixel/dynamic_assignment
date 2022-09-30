<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login.login');
    }
    public function loginstore(Request $request)
    {
        $useremail = $request->useremail;
        $password =  $request->password;
        $user = DB::table('registers')
            ->where('email','=',$useremail)
            ->where('password','=',md5($password))
            ->first();
           // if($user->is_approved == 'No'){
             //   return redirect()->back()->with('fail','User not Approved yet');
            //} 
             if(!$user)
            {
                return view('register');
            }
            else{//if all are ok
                Session::put('username',$user->name);
                Session::put('userrole',$user->role);
                // $request->Session()->flush(['username','userrole']);
                if($user->role == 'teacher'){
                    return redirect('/teacher-dashboard');
                }
                return redirect('student-dashboard');
                
            }
    }






    public function register()
    {
        return view('login.register');
    }
    public function registerstore(Request $request)
    {
        $username = $request->name;
        $useremail= $request->email;
        $userpass = $request->password;
        $userconfpass = $request->confirm;
        $role = $request->role;
        if($userpass != $userconfpass){
            return redirect()->back()->with('err_msg','Password Mismatch');
        }
        else {
            DB::table('registers')->insert([
                'name' => $username,
                'email'=>$useremail,
                'password'=>md5($userpass),
                'role' => $role,

            ]);
            return redirect()->back()->with('success','Successfully Registered');

        }
    }
    public function edit($id)
    {
        $users = DB::table('registers')
                        ->where('id', '=',$id)
                        ->first();

return view('dashboard.teacher.editprofile',compact('users'));
    }
    public function update(Request $r,$id)
    {
        $username = $request->name;
        $useremail= $request->email;
        $userpass = $request->password;
        $role = $request->role;
    
        $users = DB::table('registers')
              ->where('id', $id)
              ->update(['name' =>$username,
                        'email' => $useremail,
                        'password' => $userpass,
                        'role' => $role,
    
    
                        ]);
            return redirect()->back()->with('msg','Updated succesfully');
    }



}
