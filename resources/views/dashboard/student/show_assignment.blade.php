@extends('studentlayout')
@section('content')
<div class="container">
        <h2> Showing Assignment</h2>
        @if(Session::has('msg'))
        <div class="alert alert-danger">
      <strong>{{ Session::get('msg')}}</strong>
      </div>
    @endif
        
       
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Question</th>
                    <th>Image Question</th>
                    
                    <th>Course ID</th>
                    <th>Group Id</th>
                    
                    
                    <!-- <th>Action</th> -->
                   
                </tr>
            </thead>
            <tbody>
                
                    @foreach($assignment as $c)
                        <tr>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->name}}</td>
                            <td>{{ $c->question}}</td>
                            <td>
                              <img src="{{ asset('thumbnail/'.$c->filename)}}" width ="70px"height="70px" alt="Image">
                           
                            </td>
                            <td>{{ $c->course_id}}</td>
                            <td>{{ $c->group_id}}</td>

                            
                            <!-- <td>
                                <a href="{{ url('edit-course/'.$c->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{ url('/delete/'.$c->id)}}"class="btn btn-danger btn-sm">Delete</a>
                            </td> -->
                        </tr>
                    @endforeach
                
            </tbody>
        </table>
    </div>
    <style>
         body  {
                      background-color:   #fffdfd !important;
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
  

