<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\EnrollController;

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

Route::get('/', function () {
    return view('welcome');
});

//login
Route::get('login',[AuthController::class,'login']);
Route::post('login-store',[AuthController::class,'loginstore']);
//register
Route::get('register',[AuthController::class,'register']);
Route::post('register-store',[AuthController::class,'registerstore']);
//edit
Route::get('edit-profile/{id}',[AuthController::class,'edit']);
Route::post('edit-store/{id}',[AuthController::class,'update']);

//dashboard

Route::get('/student-dashboard', function () {
    return view('dashboard.student.dashboard');
});
Route::get('/teacher-dashboard', function () {
    return view('dashboard.teacher.dashboard');
});


//creating course
Route::get('create-course',[CourseController::class,'create']);
Route::post('create-store',[CourseController::class,'store']);
Route::get('show-course',[CourseController::class,'show']);
//edit course
Route::get('edit-course/{id}',[CourseController::class,'edit']);
Route::post('update-course/{id}',[CourseController::class,'update']);


//creating Assignment
Route::get('create-assignment',[AssignmentController::class,'create']);
Route::post('store-assignment',[AssignmentController::class,'store']);
Route::get('show-assignment',[AssignmentController::class,'showallAssingment']);
Route::get('edit-assignment',[AssignmentController::class,'editAssingnment']);

//creating Group
Route::get('create-group',[GroupController::class,'create']);
Route::post('store-group',[GroupController::class,'store']);
Route::get('show-group',[GroupController::class,'show']);

//Route::get('edit-group',[GroupController::class,'edit']);

//Enrollment
Route::get('enrollment',[EnrollController::class,'create']);
Route::post('enrollment-store',[EnrollController::class,'store']);
Route::get('show-enrollment',[EnrollController::class,'all']);




