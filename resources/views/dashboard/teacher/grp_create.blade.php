@extends('layout')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
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
      <li class="active"><a href="#">Home</a></li>
      <!-- <li class="active"><a  href="#">Page 1 <span class="caret"></span></a> -->
      <!-- <li><a href="#">Edit Profile</a></li>
       
      <li><a href="#">Edit Registration</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('login') }}"><span class="glyphicon glyphicon-user"></span>logout</a></li>
    
    </ul>
  </div>
</nav>  -->
<style>
        .mul-select{
            width: 100%;
        }
    </style>
<div class="container">
        <h3>Create Group</h3>
        <form method ="post"action="{{ url('store-group') }}">
            {{ csrf_field() }}
            
        
                <div class="form-group">
                    <label for="">Group Name:</label>
                    <input type="text"name="name" class="form-control"id="">
                </div>
      
            <div class="form-group">
                <label for="">Group Members:</label>
                <input type="number"name="member" class="form-control"id="">
            </div>
            <div class="form-group">
                  <label for="">Select ID </label>
                  <select class="mul-select" multiple="true" name="enroll_id[]" id="group"class="form-control">Group ID's
                    <option value="">Select ID</option>
                    @foreach($enrolls as $g)
                    <option value="{{$g->id}}">{{$g->id}}</option>
                    @endforeach
                    </select>
              </div>
              
        
         
          
                    <!-- <div class="form-group">
                    <label for=""> Course Type</label>
                    <select name="course_type" class="form-control"id="">
                <option value="">Select Type</option>
                <option value="lab">LAB</option>
                <option value="theory">Theory</option>
            </select> -->
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
                
        <script>
          $(document).ready(function(){
            $(".mul-select").select2({
                    placeholder: "select Id", //placeholder
                    tags: true,
                    tokenSeparators: ['/',',',';'," "] 
                });
            })
        </script>
  

</body>
</html>
@endsection