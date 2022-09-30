@extends('layout')
@section('content')
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Teacher</title>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ url('teacher-dashboard')}}">Home</a></li>
      <!-- <li class="active"><a  href="#">Page 1 <span class="caret"></span></a> -->
      <!-- <li><a href="#">Edit Profile</a></li>
       
      <li><a href="#">Edit Registration</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('login') }}"><span class="glyphicon glyphicon-user"></span>logout</a></li>
    
    </ul>
  </div>
</nav> --> 
<div class="container">
        <h3>Create Course</h3>
        <form method ="post"action="{{ url('create-store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Course Title:</label>
                <input type="text"name="course_title" class="form-control"id="">
            </div>
            
            <div class="form-group">
                <label for="">Course Code:</label>
                <input type="text" name="course_code" class="form-control"id="">
            </div>
            <div class="form-group">
                <label for="">Credit:</label>
                <input type="text" name="course_credit" class="form-control"id="">
            </div>
          
                    <div class="form-group">
                    <label for=""> Course Type</label>
                    <select name="course_type" class="form-control"id="">
                <option value="">Select Type</option>
                <option value="Lab">LAB</option>
                <option value="Theory">Theory</option>
            </select>
            <br>
                <!-- </div>
                <label class="checkbox-inamenline">
                <input type="checkbox"name="skills[]" value="">Web developer
                </label>
                <label class="checkbox-inline">
                <input type="checkbox"name="skills[]" value="">problem solver
                </label>
                <label class="checkbox-inline">
                <input type="checkbox"name="skills[]" value="">Leadership
                </label>
                <div> -->
                  
            
                        <div class="form-group">
                            <button type="submit"class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
                </div>
                <style>
                    body  {
                      background-color:  rgb(152, 227, 227)!important;
                      background-repeat: no-repeat;
                      background-attachment: fixed;
                      background-size: 100% 100%;
                          }
                  </style>
  

</body>
</html>
@endsection