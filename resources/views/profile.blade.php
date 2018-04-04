<!doctype html>
<html lang="en">
@include('navbar.head')
<body>

<div class="wrapper">
    @include('navbar.sidebar')

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">User Profile</a>
                </div>
                <div class="collapse navbar-collapse">


                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>{{ Auth::user()->name }}</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                        @if(session('response'))
                                          <div class="alert alert-success">{{session('response')}}</div>
                                        @endif
                                      </div>
                                  </div>
                              </div>
                                <form method="POST" action="{{url('/submit') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Branch</label>
                                                <input type="text" class="form-control"  name='branch'  disabled value="{{Auth::user()->branch}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Year</label>
                                                <input type="text" class="form-control"  name='year'disabled value="{{Auth::user()->year}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sem</label>
                                                <input type="text" class="form-control"  name='sem' id='sem' value="{{$profiles[0]->sem}}" required>
                                            </div>
                                        </div>
                                   </div>

                                    <div class="row">
                                      <div class="col-md-9">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Email address</label>
                                              <input type="email" class="form-control" name='email'disabled value="{{Auth::user()->email}}" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>First Name</label>
                                              <input type="text" class="form-control"  name='f_name' placeholder="First Name" value="{{$profiles[0]->f_name}} "required>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Last Name</label>
                                              <input type="text" class="form-control"  name='l_name' placeholder="First Name" value="{{$profiles[0]->l_name}}"required>
                                          </div>
                                      </div>
                                 </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="number" maxlength="10" class="form-control" name='s_phone' placeholder="Phone Number" required value="{{$profiles[0]->s_phone}}" required>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label>Address</label>
                                              <input type="text" class="form-control" placeholder="Home Address" name='address' value="{{$profiles[0]->address}}" required>
                                          </div>
                                      </div>
                                  </div>
                                  <h3><label class='title'>Parents/Gardians Details</label></h3>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>First Name</label>
                                              <input type="text" class="form-control"  name='p_f_name' placeholder="First Name" value="{{$profiles[0]->p_f_name}}" required>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Last Name</label>
                                              <input type="text" class="form-control"  name='p_l_name' placeholder="First Name" value="{{$profiles[0]->p_l_name}}">
                                          </div>
                                      </div>
                                 </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>Parents Number</label>
                                        <input type="number" maxlength="10" class="form-control" name='p_phone' placeholder="Phone Number" value="{{$profiles[0]->p_phone}}" required>
                                    </div>
                                  </div>
                                </div>



                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                      <h4 class="title">{{$profiles[0]->f_name}} {{$profiles[0]->l_name}}<br/>
                                         <small>{{$profiles[0]->s_phone}}</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> {{$profiles[0]->address}}
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
