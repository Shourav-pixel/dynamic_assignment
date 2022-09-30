@extends('layout')
@section('content')
<!DOCTYPE html>
<!-- <html lang="en">
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
<nav class="navbar navbar-inverse"> -->
  <!-- <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ url('teacher-dashboard')}}">Home</a></li>
      <!-- <li class="active"><a  href="#">Page 1 <span class="caret"></span></a> -->
      <!-- <li><a href="#">Edit Profile</a></li>
       
      <li><a href="#">Edit Registration</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('login') }}"><span class="glyphicon glyphicon-user"></span>logout</a></li> -->
    
    <!-- </ul>
  </div>
</nav> --> 

@if(Session::has('msg'))
      <div class="alert alert-success">
      <strong>{{ Session::get('msg')}}</strong>
      </div>
    @endif  
<div class="container">
        <h3>Create Assignment</h3>
        <form enctype="multipart/form-data" method ="post"action="{{ url('store-assignment') }}">
            {{ csrf_field() }}
            
            
                <div class="form-group">
                    <label for="">Assignment Name:</label>
                    <input type="text"name="name" class="form-control"id="">
                </div>
                <!-- for course selection -->
                <div class="form-group">
                  <label for="">Select Course</label>
                    <select name="course_id" id="division"class="form-control">Course Title
                    <option value="">Select Course</option>
                    @foreach($courses as $d)
                    <option value="{{$d->id}}">{{$d->course_title}}</option>
                    @endforeach
                    </select>
              </div>
              <div class="form-group">
                  <label for="">Select Group</label>
                    <select name="group_id" id="division"class="form-control">Course Title
                    <option value="">Select Group</option>
                    @foreach($groups as $g)
                    <option value="{{$g->id}}">{{$g->name}}</option>
                    @endforeach
                    </select>
              </div>
              
               
              <div class="form-group">
                <label for="comment">Assignment Description:</label>
                <textarea class="form-control" rows="5"name="question" id="comment"></textarea>
              </div>
              <!-- <div class="row"> -->
                <!-- <div class="col-md-4"></div> -->
                <div class="form-group ">
                <input type="file" name="filename" class="form-control">
                </div>
                <br>
               
                <div class="form-group">
                            <button type="submit"class="btn btn-primary">Save</button>
                        </div>
              </div>

         
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