
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Courses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ url('teacher-dashboard')}}">Home</a></li>
      <!-- <li class="active"><a  href="#">Page 1 <span class="caret"></span></a> -->
      <!-- <li><a href="{{ url('edit-teacher/'.$users->id) }}">Edit Profile</a></li> -->
       
      <li><a href="#">Edit Registration</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('login') }}"><span class="glyphicon glyphicon-user"></span>logout</a></li>
    
    </ul>
  </div>
</nav>

<div class="container">
  <h2>Edit Employees</h2>
    @if(Session::has('msg'))
      <div class="alert alert-success">
      <strong>{{ Session::get('msg')}}</strong>
      </div>
    @endif   
  <form action="{{ url('update-course/'.$courses->id)   }}"method="post">
    {{ csrf_field() }}
    <div class="form-group">
     
      <label for="Name">Course Title:</label>
      <input type="text" class="form-control"value="{{ $courses->course_title}}" id="name" placeholder="name" name="course_title">
    </div>
    <div class="form-group">
      <label for="pwd">Course Code</label>
      <input type="text" class="form-control"value="{{ $courses->course_code }}" id="course_code" placeholder="course_code" name="course_code" selected>
    </div>
    <div class="form-group">
      <label for="pwd">Course Credit</label>
      <input type="number" class="form-control"value="{{ $courses->course_credit}}" id="course_credit" placeholder="course_credit" name="course_credit">
    </div>
    <div class="form-group">
      <label for=""> Course Type</label>
      <select name="course_type" class="form-control"id="">
        <option value="">Select Type</option>
        <option value="Lab" {{ $courses->course_type=='lab' ? 'selected': ''}}>LAB</option>
        <option value="Theory"  {{ $courses->course_type=='theory' ? 'selected': ''}} >Theory</option>
      </select>
    </div>
  
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ url('show-course')}}"class="btn btn-info">All Courses</a>
  </div>
 
  
 
  
      </form>
    </div>
    </div>
       

</body>
</html>
