

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<!------ Include the above in your HEAD tag ---------->

        
        
        <nav class="navbar navbar-expand navbar-dark bg-dark"> <a href="#menu-toggle" id="menu-toggle" class="navbar-brand"><span class="navbar-toggler-icon"></span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"> <a class="nav-link" href="{{ url('teacher-dashboard') }}">Home <span class="sr-only">(current)</span></a> </li>
                    
                    <li class="nav-item active"> <a class="nav-link" href="#">Edit Profile <span class="sr-only">(current)</span></a> </li>
                    
                    <li class="nav-item active"> <a class="nav-link" href="#">Edit Registration <span class="sr-only">(current)</span></a> </li>
                    
                </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('login') }}"><span class="glyphicon glyphicon-user"></span>logout</a></li>
                  </ul>
                    <form class="form-inline my-2 my-md-0"> </form>
            </div>
        </nav>
        <div id="wrapper" class="toggled">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <!-- <li class="sidebar-brand"> <a href="{{ url('teacher-dashboard')}}"> Home </a> </li>
                    <li> <a href="{{ url('edit-teacher') }}">Edit Profile</a> </li>
                    <li> <a href="#">Edit Registration</a> </li>
                    <li> <a href="{{ url('login') }}">logout</a> </li> -->
                    <li> <a href="{{ url('create-course') }}">Create Course</a> </li>
                    <li> <a href="{{ url('show-course') }}">Show Course</a> </li>
                    <!-- <li> <a href="{{ url('edit-courses') }}">Edit Course</a> </li> -->
                    <li> <a href="{{ url('create-assignment') }}">Create Assingment</a> </li>
                    <li> <a href="{{ url('create-group') }}">Create Group</a> </li>
                    <li> <a href="{{ url('show-enrollment') }}">Show Enroll</a> </li>
                </ul>
            </div> <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    
                    @yield('content')
                    
                </div>
            </div> <!-- /#page-content-wrapper -->
        </div> <!-- /#wrapper -->
        
        <!-- Bootstrap core JavaScript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script> <!-- Menu Toggle Script -->
        <script>
          $(function(){
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

            $(window).resize(function(e) {
              if($(window).width()<=768){
                $("#wrapper").removeClass("toggled");
              }else{
                $("#wrapper").addClass("toggled");
              }
            });
          });
           
        </script>
        
   
  </html>
 