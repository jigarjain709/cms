<!doctype html>
<html lang="en">
@include('navbar.head')
<style>
p.test {
    word-wrap: break-word;
    white-space: pre-wrap;.
}
</style>
<body>

<div class="wrapper">
    @include('navbar.sidebar')

    <div class="main-panel">
		@include('navbar.navbar1')

        <div class="content">

          <div class="container-fluid">
              <div class="card">

                  <div class="content">
                      <div class="row">

                        <div class="col-md-8">
                          <!-- Get All Notices from the Table -->
                          @foreach ($place->all() as $placemen )
                            <div class="card">
                                <div class="header">
                                    <h2 class="title" align="center" name='n_title'>{{$placemen->title}}</h2>
                                    <p class="category" align="center" name='n_date'>{{Carbon\Carbon::parse($placemen->created_at)->format('d/m/Y')}}</p>
                                </div>
                                <hr>
                                <div class="content" name='n_content'>

                                    <p class="test">{{$placemen->description}}</p>
                                </div>
                                <div class="card">
                                  <pre><a href="{{$placemen->links}}" target="_blank">{{$placemen->links}}</a></pre>
                                </div>
                              </div>
                          @endforeach



                        </div>

                        <!-- Create a new Notice -->
                        <h5>All Notification</h5>
                        @foreach ($place->all() as $placemen )

                        <div class="col-md-4">
                          <div class="alert alert-info">
                            <span>{{$placemen->title}}</span>
                          </div>
                        </div>
                      @endforeach
                    </div>
                    <br>
                    <br>
                  </div>
              </div>
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
