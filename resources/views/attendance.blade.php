<!doctype html>
<html lang="en">
@include('navbar.head')
<body>

<div class="wrapper">
    @include('navbar.sidebar')

    <div class="main-panel">
		@include('navbar.navbar1')

        <div class="content">

          <h3>Your Attendance</h3>

          <div class="table-responsive text-center">
            <table class="table table-borderless" >

              <thead>
                <tr>
                  <th class="text-center">Subject</th>

                  <th class="text-center">Attended</th>

                  <th class="text-center">Out of</th>

                </tr>
             </thead>

        <tbody>
            @foreach($doas as $doa)
              <tr>
                <td>{{$doa->subject}}</td>
                <td>{{$doa->att}}</td>
                <td>{{$doa->total}}</td>
             </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>


        @include('navbar.footer')
      </div>
    </div>


</body>
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
</html>
