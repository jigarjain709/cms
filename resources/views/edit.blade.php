<!doctype html>
<html lang="en">
@include('navbar.head')
<body>

<div class="wrapper">
    <!-- @include('navbar.sidebar') -->

    <div class="sidebar" data-color="purple" data-image="/assets/img/sidebar-5.jpg">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Watumull College
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="/home">
                        <i class="pe-7s-graph"></i>
                        <p></p>
                    </a>
                </li>
                <li>
                    <a href="/profile">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
          </ul>
      </div>
    </div>


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
                    <a class="navbar-brand"></a>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header bg-info" style="height:53px">
                                <h4 class="title">EDIT {{$timetable->year}} {{$timetable->branch}} TIME TABLE</h4>
                            </div>
                            <div class="content">
                              <!-- <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                        @if(session('response'))
                                          <div class="alert alert-success">{{session('response')}}</div>
                                        @endif
                                      </div>
                                  </div>
                              </div> -->
                              <form action="{{ route('timetables.update', $timetable->id) }}" method="post">
                              {{csrf_field()}}
                              {{method_field('PUT')}}
                              @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{ $error }}</p>
                              @endforeach
                              @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status')}}
                                  </div>
                              @endif

                                <div class="row">
                                    <div class="col-md-12" align="center">
                                      <div class="col-md-3"></div>
                                      <div class="form-group" >
                                          <label for="title" class="col-sm-2 col-sm-pull-right-1 control-label " ><span style="line-height:35px" >Day</span></label>
                                          <div class="col-lg-3">
                                              <input type="text" class="form-control" name="timetable_day" value="{{$timetable->day}}" readonly>
                                          </div>
                                      </div>
                                     </div>
                               </div>
                                <hr size="300">
                                  <div class="row" >
                                    <div class="col-md-12">
                                      <div class="col-md-1"></div>
                                      <div class="col-md-4">
                                      <div class="form-group">
                                          <label for="title" class="col-lg-4 control-label"><span style="line-height:35px">Subject 1</span></label>
                                          <div class="col-lg-8">
                                              <input type="text" class="form-control" name="subject1"   value="{{$timetable->subject1}}">
                                            </div>
                                          </div>
                                        </div>
                                      <div class="col-lg-1"></div>
                                      <div class="col-md-5">
                                          <div class="form-group">
                                            <div class="col-md-1"></div>
                                            <label for="title" class="col-lg-3 control-label"><span style="line-height:35px">Teacher 1</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="teacher1"   value="{{$timetable->teacher1}}">
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="title" class="col-lg-4 control-label"><span style="line-height:35px">Subject 2</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="subject2"   value="{{$timetable->subject2}}">
                                              </div>
                                            </div>
                                          </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                              <div class="col-md-1"></div>
                                              <label for="title" class="col-lg-3 control-label"><span style="line-height:35px">Teacher 2</span></label>
                                              <div class="col-lg-8">
                                                  <input type="text" class="form-control" name="teacher2"   value="{{$timetable->teacher2}}">
                                              </div>
                                            </div>
                                        </div>
                                      </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="col-md-1"></div>
                                          <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="title" class="col-lg-4 control-label"><span style="line-height:35px">Subject 3</span></label>
                                              <div class="col-lg-8">
                                                  <input type="text" class="form-control" name="subject3"   value="{{$timetable->subject3}}">
                                                </div>
                                              </div>
                                            </div>
                                          <div class="col-lg-1"></div>
                                          <div class="col-md-5">
                                              <div class="form-group">
                                                <div class="col-md-1"></div>
                                                <label for="title" class="col-lg-3 control-label"><span style="line-height:35px">Teacher 3</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="teacher3"   value="{{$timetable->teacher3}}">
                                                </div>
                                              </div>
                                          </div>
                                        </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title" class="col-lg-4 control-label"><span style="line-height:35px">Subject 4</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="subject4"   value="{{$timetable->subject4}}">
                                                  </div>
                                                </div>
                                              </div>
                                            <div class="col-lg-1"></div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                  <div class="col-md-1"></div>
                                                  <label for="title" class="col-lg-3 control-label"><span style="line-height:35px">Teacher 4</span></label>
                                                  <div class="col-lg-8">
                                                      <input type="text" class="form-control" name="teacher4"   value="{{$timetable->teacher4}}">
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                    </div>

                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title" class="col-lg-4 control-label"><span style="line-height:35px">Subject 5</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="subject5"   value="{{$timetable->subject5}}" readonly>
                                                  </div>
                                                </div>
                                              </div>
                                            <div class="col-lg-1"></div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                  <div class="col-md-1"></div>
                                                  <label for="title" class="col-lg-3 control-label"><span style="line-height:35px">Teacher 5</span></label>
                                                  <div class="col-lg-8">
                                                      <input type="text" class="form-control" name="teacher5"   value="{{$timetable->teacher5}}" readonly>
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="col-md-1"></div>
                                              <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="title" class="col-lg-4 control-label"><span style="line-height:35px">Subject 6</span></label>
                                                  <div class="col-lg-8">
                                                      <input type="text" class="form-control" name="subject6"   value="{{$timetable->subject6}}">
                                                    </div>
                                                  </div>
                                                </div>
                                              <div class="col-lg-1"></div>
                                              <div class="col-md-5">
                                                  <div class="form-group">
                                                    <div class="col-md-1"></div>
                                                    <label for="title" class="col-lg-3 control-label"><span style="line-height:35px">Teacher 6</span></label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="teacher6"   value="{{$timetable->teacher6}}">
                                                    </div>
                                                  </div>
                                              </div>
                                            </div>
                                            </div>

                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label for="title" class="col-lg-4 control-label"><span style="line-height:35px">Subject 7</span></label>
                                                <div class="col-lg-8">
                                                  <input type="text" class="form-control" name="subject7"   value="{{$timetable->subject7}}">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="col-md-5">
                                              <div class="form-group">
                                                <div class="col-md-1"></div>
                                                <label for="title" class="col-lg-3 control-label"><span style="line-height:35px">Teacher 7</span></label>
                                                <div class="col-lg-8">
                                                  <input type="text" class="form-control" name="teacher7"   value="{{$timetable->teacher7}}">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <!-- TEACHER'S PART -->
<!--
                                        <div class="row">

                                          </div>

                                          <div class="row">
                                            <div class="col-md-9">
                                              <div class="col-md-2"></div>
                                              <div class="form-group">
                                                <label for="title" class="col-lg-3 control-label"><span   style="line-height:35px">Teacher 2</span></label>
                                                <div class="col-lg-7">
                                                  <input type="text" class="form-control" name="teacher2"   value="{{$timetable->teacher2}}">

                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-9">
                                              <div class="col-md-2"></div>
                                              <div class="form-group">
                                                <label for="title" class="col-lg-3 control-label"><span   style="line-height:35px">Teacher 3</span></label>
                                                <div class="col-lg-7">
                                                  <input type="text" class="form-control" name="teacher3"   value="{{$timetable->teacher3}}">

                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-9">
                                              <div class="col-md-2"></div>
                                              <div class="form-group">
                                                <label for="title" class="col-lg-3 control-label"><span   style="line-height:35px">Teacher 4</span></label>
                                                <div class="col-lg-7">
                                                  <input type="text" class="form-control" name="teacher4"   value="{{$timetable->teacher4}}">

                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-9">
                                              <div class="col-md-2"></div>
                                              <div class="form-group">
                                                <label for="title" class="col-lg-3 control-label"><span   style="line-height:35px">Teacher 5</span></label>
                                                <div class="col-lg-7">
                                                  <input type="text" class="form-control" name="teacher5"   value="{{$timetable->teacher5}}">

                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-9">
                                              <div class="col-md-2"></div>
                                              <div class="form-group">
                                                <label for="title" class="col-lg-3 control-label"><span   style="line-height:35px">Teacher 6</span></label>
                                                <div class="col-lg-7">
                                                  <input type="text" class="form-control" name="teacher6"   value="{{$timetable->teacher6}}">

                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-9">
                                              <div class="col-md-2"></div>
                                              <div class="form-group">
                                                <label for="title" class="col-lg-3 control-label"><span   style="line-height:35px">Teacher 7</span></label>
                                                <div class="col-lg-7">
                                                  <input type="text" class="form-control" name="teacher7"   value="{{$timetable->teacher7}}">

                                                </div>
                                              </div>
                                            </div>
                                          </div> -->





                              <div class="form-group"   align="center">
                                  <button type="submit" class="btn btn-primary">Update</button>
                              </div>

                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



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
