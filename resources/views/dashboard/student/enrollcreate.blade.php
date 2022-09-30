@extends('studentlayout')
@section('content')

@if(Session::has('msg'))
      <div class="alert alert-success">
      <strong>{{ Session::get('msg')}}</strong>
      </div>
    @endif  
<div class="container">
        <h3>Enrollment</h3>
        <form method ="post"action="{{ url('enrollment-store') }}">
            {{ csrf_field() }}
            
            
                <div class="form-group">
                    <label for="">Student Name:</label>
                    <input type="text"name="name" class="form-control"id="">
                </div>
                <div class="form-group">
                    <label for="">Student ID:</label>
                    <input type="number"name="student_id" class="form-control"id="">
                </div>
                <div class="form-group">
                    <label for="">Batch:</label>
                    <input type="text"name="batch" class="form-control"id="">
                </div>
                <div class="form-group">
                    <label for="">Session:</label>
                    <input type="text"name="session" class="form-control"id="">
                </div>
                <!-- for course selection -->
           
                <div class="form-group">
                  <label for="">Select Course</label>
                    <select name="course_title" id="division"class="form-control">Course Title
                    <option value="">Select Course</option>
                    @foreach($courses as $d)
                    <option value="{{$d->id}}">{{$d->course_title}}</option>
                    @endforeach
                    </select>
              </div>
              <div class="form-group">
                  <label for="">Select Course</label>
                    <select name="section" id=""class="form-control">Course Title
                    <option value="">Select Section</option>
                    <option value="A">A</option>
                    
                    <option value="B">B</option>
                    <option value="C">C</option>
                    
                    </select>
              </div>
              <!-- <div class="row"> -->
                <!-- <div class="col-md-4"></div> -->
             
               
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
                      background-color:   #fffdfd!important;
                      background-repeat: no-repeat;
                      background-attachment: fixed;
                      background-size: 100% 100%;
                          }
                </style>
  

</body>
</html>
@stop