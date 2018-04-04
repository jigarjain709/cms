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
                    <a class="navbar-brand">View Your Time Table</a>
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

        <div class="panel-body">
          <div class="content">
            <div class="container-fluid">
                  <div class="card">

                    <div class="header">
                      <div class="col-md-12">
                        <div class="col-md-3">
                              <label>Class:- </label>
                              <label value="{{Auth::user()->year}}">{{Auth::user()->year}}</label>
                            </div>
                            <div class="col-md-3">
                              @foreach($data as $item)
                              <label>ROOM NO:- </label>
                              <label>{{$item->classrom}}</label>
                              @endforeach
                            </div>
                            <div class="col-md-3" >
                              @foreach($data as $item)
                              <label style="text-align:left">BRANCH:- </label>
                              <label style="text-align:left">{{$item->branch}}</label>
                              @endforeach
                            </div>
                            <div class="col-md-3" >
                              @foreach($data as $item)
                              <label style="text-align:left">BATCH:- </label>
                              <label style="text-align:left">{{$item->batch}}</label>
                              @endforeach
                            </div>
                          </div>
                        </div>

                        <br>
                        <div class="content">
                            <div class="row">
                              <div class="col-md-12">
                                <table class="table table-bordered" id="table">
                                  <thead>
                                    <tr >
                                      <th class="text-center" style="font-weight:bold; text:200px">Day</th>
                                      <th class="text-center">9:30-10:30</th>
                                      <th class="text-center">10:30-11:30</th>
                                      <th class="text-center">11:30-12:30</th>
                                      <th class="text-center">12:30-1:30</th>
                                      <th class="text-center">1:30-2:00</th>
                                      <th class="text-center">2:30-3:00</th>
                                      <th class="text-center">3:00-4:00</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <!-- MAIN DATATABLE PART -->
                                    @foreach($data as $item)
                                    <tr class="item{{$item->id}}" style="text-align:center">
                                      <td>{{$item->day}}</td>
                                      <td>{{$item->subject1}}<br>({{$item->teacher1}})</td>
                                      <td>{{$item->subject2}}<br>({{$item->teacher2}})</td>
                                      <td>{{$item->subject3}}<br>({{$item->teacher3}})</td>
                                      <td>{{$item->subject4}}<br>({{$item->teacher4}})</td>
                                      <td>{{$item->subject5}}<br>({{$item->teacher5}})</td>
                                      <td>{{$item->subject6}}<br>({{$item->teacher6}})</td>
                                      <td>{{$item->subject7}}<br>({{$item->teacher7}})</td>
                                    </tr>
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

                                  <!-- FOOTER -->

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

                            <!-- DATATABLE PART -->
    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script
      src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></scri>
  <link rel="stylesheet"
      href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet"
      href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">



                            <!-- DATATABLE INITIALIZATION -->
  <script>
    $(document).ready(function() {
      $('#table').DataTable();
  } );
   </script>

</html>
