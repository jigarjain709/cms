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
                    <a class="navbar-brand">Dashboard</a>
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
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
<br>




            <div class="content-wrapper py-3">
              <div class="container-fluid">
                        <div  id="success">
                          <div class="col-md-12" align="center">
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status')}}
                              </div>
                              @endif
                            </div>
                          </div>
                          <div  class="panel-group"  id="accordion">

                                        <span style="height:45px" align="center"> TIME TABLE FOR FE (A)
                                        </span>
                                        <div>
                                          <div class="table-responsive">
                                            <table class="table table-bordered table-striped" width="100%" id="dataTable"   cellspacing="0">
                                              <thead>
                                                <th class="text-center" style="font-weight:bold">Day</th>
                                                <th class="text-center" style="font-weight:bold">9:30-10:30</th>
                                                <th class="text-center" style="font-weight:bold">10:30-11:30</th>
                                                <th class="text-center" style="font-weight:bold">11:30-12:30</th>
                                                <th class="text-center" style="font-weight:bold">12:30-1:30</th>
                                                <th class="text-center" style="font-weight:bold">1:30-2:00</th>
                                                <th class="text-center" style="font-weight:bold">2:30-3:00</th>
                                                <th class="text-center" style="font-weight:bold">3:00-4:00</th>
                                                <th class="text-center" style="font-weight:bold">Action</th>
                                              </thead>
                                            <tbody>
                                              @foreach($timetables as $timetable)
                                              @if($timetable->year === 'FE_A')
                                                @if($timetable->branch === 'COMPS')

                                                <tr align="center">
                                                  <td>{{$timetable->day}}</td>
                                                  <td>{{$timetable->subject1}}<br>{{$timetable->teacher1}}</td>
                                                  <td>{{$timetable->subject2}}<br>{{$timetable->teacher2}}</td>
                                                  <td>{{$timetable->subject3}}<br>{{$timetable->teacher3}}</td>
                                                  <td>{{$timetable->subject4}}<br>{{$timetable->teacher4}}</td>
                                                  <td>{{$timetable->subject5}}<br>{{$timetable->teacher5}}</td>
                                                  <td>{{$timetable->subject6}}<br>{{$timetable->teacher6}}</td>
                                                  <td>{{$timetable->subject7}}<br>{{$timetable->teacher7}}</td>
                                                  <form action="{{route('timetables.edit', $timetable->id)}}" method="GET">
                                                    {{csrf_field()}}
                                                    <td><p data-placement="top" data-toggle="tooltip" title="Edit" ><button class="btn btn-primary btn-md  " data-title="Edit" text-align="center"><span  align="center">Edit</span></button></p></td>
                                                  </form>
                                                </tr>

                                                @endif
                                                @endif
                                              @endforeach
                                            </tbody>
                                          </table>
                                      </div>
                                    </div>



                                    <span style="height:45px" align="center"> TIME TABLE FOR SE COMPS
                                    </span>
                                    <div>
                                      <div class="table-responsive">
                                        <table class="table table-bordered table-striped" width="100%" id="dataTable"   cellspacing="0">
                                          <thead>
                                            <th class="text-center" style="font-weight:bold">Day</th>
                                            <th class="text-center" style="font-weight:bold">9:30-10:30</th>
                                            <th class="text-center" style="font-weight:bold">10:30-11:30</th>
                                            <th class="text-center" style="font-weight:bold">11:30-12:30</th>
                                            <th class="text-center" style="font-weight:bold">12:30-1:30</th>
                                            <th class="text-center" style="font-weight:bold">1:30-2:00</th>
                                            <th class="text-center" style="font-weight:bold">2:30-3:00</th>
                                            <th class="text-center" style="font-weight:bold">3:00-4:00</th>
                                            <th class="text-center" style="font-weight:bold">Action</th>
                                          </thead>
                                        <tbody>
                                          @foreach($timetables as $timetable)
                                          @if($timetable->year === 'SE')
                                            @if($timetable->branch === 'COMPS')
                                              <tr align="center">
                                                <td>{{$timetable->day}}</td>
                                                <td>{{$timetable->subject1}}<br>{{$timetable->teacher1}}</td>
                                                <td>{{$timetable->subject2}}<br>{{$timetable->teacher2}}</td>
                                                <td>{{$timetable->subject3}}<br>{{$timetable->teacher3}}</td>
                                                <td>{{$timetable->subject4}}<br>{{$timetable->teacher4}}</td>
                                                <td>{{$timetable->subject5}}<br>{{$timetable->teacher5}}</td>
                                                <td>{{$timetable->subject6}}<br>{{$timetable->teacher6}}</td>
                                                <td>{{$timetable->subject7}}<br>{{$timetable->teacher7}}</td>
                                                <form action="{{route('timetables.edit', $timetable->id)}}" method="GET">
                                                  {{csrf_field()}}
                                                  <td><p data-placement="top" data-toggle="tooltip" title="Edit" ><button class="btn btn-primary btn-md  " data-title="Edit" text-align="center"><span  align="center">Edit</span></button></p></td>
                                                </form>
                                              </tr>
                                            @endif
                                            @endif
                                          @endforeach
                                        </tbody>
                                      </table>
                                      </div>
                                      <br>
                                    </div>



                              <span style="height:45px" align="center"> TIME TABLE FOR TE COMPS
                              </span>
                              <div>
                                <div class="table-responsive">
                                  <table class="table table-bordered table-striped" width="100%" id="dataTable"   cellspacing="0">
                                    <thead>
                                      <th class="text-center" style="font-weight:bold">Day</th>
                                      <th class="text-center" style="font-weight:bold">9:30-10:30</th>
                                      <th class="text-center" style="font-weight:bold">10:30-11:30</th>
                                      <th class="text-center" style="font-weight:bold">11:30-12:30</th>
                                      <th class="text-center" style="font-weight:bold">12:30-1:30</th>
                                      <th class="text-center" style="font-weight:bold">1:30-2:00</th>
                                      <th class="text-center" style="font-weight:bold">2:30-3:00</th>
                                      <th class="text-center" style="font-weight:bold">3:00-4:00</th>
                                      <th class="text-center" style="font-weight:bold">Action</th>
                                    </thead>
                                  <tbody>
                                    @foreach($timetables as $timetable)
                                    @if($timetable->year === 'TE')
                                      @if($timetable->branch === 'COMPS')
                                      <tr align="center">
                                        <td>{{$timetable->day}}</td>
                                        <td>{{$timetable->subject1}}<br>{{$timetable->teacher1}}</td>
                                        <td>{{$timetable->subject2}}<br>{{$timetable->teacher2}}</td>
                                        <td>{{$timetable->subject3}}<br>{{$timetable->teacher3}}</td>
                                        <td>{{$timetable->subject4}}<br>{{$timetable->teacher4}}</td>
                                        <td>{{$timetable->subject5}}<br>{{$timetable->teacher5}}</td>
                                        <td>{{$timetable->subject6}}<br>{{$timetable->teacher6}}</td>
                                        <td>{{$timetable->subject7}}<br>{{$timetable->teacher7}}</td>
                                        <form action="{{route('timetables.edit', $timetable->id)}}" method="GET">
                                          {{csrf_field()}}
                                          <td><p data-placement="top" data-toggle="tooltip" title="Edit" ><button class="btn btn-primary btn-md  " data-title="Edit" text-align="center"><span  align="center">Edit</span></button></p></td>
                                        </form>
                                      <
                                      @endif
                                      @endif
                                    @endforeach
                                  </tbody>
                                </table>
                            </div>
                          </div>


                                      <span style="height:45px" align="center"> TIME TABLE FOR BE COMPS
                                      </span>
                                      <div>
                                        <div class="table-responsive">
                                          <table class="table table-bordered table-striped" width="100%" id="dataTable"   cellspacing="0">
                                            <thead>
                                              <th class="text-center" style="font-weight:bold">Day</th>
                                              <th class="text-center" style="font-weight:bold">9:30-10:30</th>
                                              <th class="text-center" style="font-weight:bold">10:30-11:30</th>
                                              <th class="text-center" style="font-weight:bold">11:30-12:30</th>
                                              <th class="text-center" style="font-weight:bold">12:30-1:30</th>
                                              <th class="text-center" style="font-weight:bold">1:30-2:00</th>
                                              <th class="text-center" style="font-weight:bold">2:30-3:00</th>
                                              <th class="text-center" style="font-weight:bold">3:00-4:00</th>
                                              <th class="text-center" style="font-weight:bold">Action</th>
                                            </thead>
                                          <tbody>
                                            @foreach($timetables as $timetable)
                                            @if($timetable->year === 'BE')
                                              @if($timetable->branch === 'COMPS')
                                              <tr align="center">
                                                <td>{{$timetable->day}}</td>
                                                <td>{{$timetable->subject1}}<br>{{$timetable->teacher1}}</td>
                                                <td>{{$timetable->subject2}}<br>{{$timetable->teacher2}}</td>
                                                <td>{{$timetable->subject3}}<br>{{$timetable->teacher3}}</td>
                                                <td>{{$timetable->subject4}}<br>{{$timetable->teacher4}}</td>
                                                <td>{{$timetable->subject5}}<br>{{$timetable->teacher5}}</td>
                                                <td>{{$timetable->subject6}}<br>{{$timetable->teacher6}}</td>
                                                <td>{{$timetable->subject7}}<br>{{$timetable->teacher7}}</td>
                                                <form action="{{route('timetables.edit', $timetable->id)}}" method="GET">
                                                  {{csrf_field()}}
                                                  <td><p data-placement="top" data-toggle="tooltip" title="Edit" ><button class="btn btn-primary btn-md  " data-title="Edit" text-align="center"><span  align="center">Edit</span></button></p></td>
                                                </form>
                                              </tr>
                                              @endif
                                              @endif
                                            @endforeach
                                          </tbody>
                                        </table>
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


  <!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/ui-lightness/jquery-ui.css"> -->
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/blitzer/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#accordion" ).accordion({
      collapsible: true,
      //Set the active accodtion tab to none
      active : 'none'
    });
  });
  </script>
  <script>
    $(document).ready(function(){
        setTimeout(function() {
          $('#success').fadeOut('fast');
        }, 2000); // <-- time in milliseconds
    });

  </script>




 </html>
