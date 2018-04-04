<!doctype html>
<html lang="en">
@include('navbar.head')
<body>

<div class="wrapper">
    @include('navbar.sidebar')

    <div class="main-panel">
		@include('navbar.navbar1')

        <div class="content">

          <h3>Your Result</h3>

          <div class="table-responsive text-center">
            <table class="table table-borderless" >

              <thead>
                <tr>
                  <th class="text-center">Subject</th>
                  <th class="text-center">Marks</th>
                  <th class="text-center">Out Of Marks</th>
                </tr>
             </thead>

        <tbody>
            @foreach($results as $result)
              <tr>
                <td>{{$result->subject}}</td>
                <td>{{$result->value}}</td>
                <td>{{$result->full}}</td>
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


  
</html>
