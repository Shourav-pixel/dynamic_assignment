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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ url('teacher-dashboard')}}">Home</a></li> -->
      <!-- <li class="active"><a  href="#">Page 1 <span class="caret"></span></a>
     
       
      <li><a href="#">Edit Registration</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('login') }}"><span class="glyphicon glyphicon-user"></span>logout</a></li>
    
    </ul>
  </div>
</nav> -->
<div class="container">
        <h2>Course List</h2>
        @if(Session::has('msg'))
        <div class="alert alert-danger">
      <strong>{{ Session::get('msg')}}</strong>
      </div>
    @endif
        <a href="{{ url('create-course') }}"class="btn btn-info" >Create Course</a>
       
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Course Title</th>
                    <th>Course Code</th>
                    <th>Course Credit</th>
                    <th>Course Type</th>
                    <th>Action</th>
                   
                </tr>
            </thead>
            <tbody>
                
                    @foreach($courses as $c)
                        <tr>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->course_title}}</td>
                            <td>{{ $c->course_code}}</td>
                            <td>{{ $c->course_credit}}</td>
                            <td>{{ $c->course_type}}</td>
                            <td>
                                <a href="{{ url('edit-course/'.$c->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{ url('/delete/'.$c->id)}}"class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                
            </tbody>
        </table>
    </div>
    <style>
       body  {
                      background-color:  rgb(152, 227, 227)!important;
                      background-repeat: no-repeat;
                      background-attachment: fixed;
                      background-size: 100% 100%;
                          }
                          th{
                            text-align: center;
                          }
                          td{
                            text-align: center;
                          }
    </style>
    
</body>
</html>


@stop
