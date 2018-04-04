<!doctype html>
<html lang="en">
@include('navbar.head')
<style>
p.test {
    word-wrap: break-word;
    white-space: pre-wrap;

}
</style>
<body>

<div class="wrapper">
    @include('navbar.sidebar')

    <div class="main-panel">
		@include('navbar.navbar1')

        <!-- <div class="w3-container">
          <h2>London</h2>
          <p>London is the most populous city in the United Kingdom,
            with a metropolitan area of over 9 million inhabitants.</p>
            <hr>
        </div> -->

        <div class="content">
            <div class="container-fluid">
                <div class="card">

                    <div class="content">
                        <div class="row">

                          <div class="col-md-8">
                            <!-- Get All Notices from the Table -->
                              @foreach($notif->all() as $noti)
                              <div class="card">
                                  <div class="header">
                                      <h2 class="title" align="center" name='n_title'>{{$noti->title}}</h2>
                                      <p class="category" align="center" name='n_date'>{{Carbon\Carbon::parse($noti->created_at)->format('d/m/Y')}}</p>
                                  </div>
                                  <hr>
                                  <div class="content" name='n_content'>
                                         <p>{{$noti->description}}</p>
                                  </div>
                                  <hr>
                                  <div class="footer" align="right">
                                      <p class="test" style="padding-right: 10px;">Notice By:{{$noti->from}}</p>
                                  </div>
                                </div>
                                  @endforeach
                          </div>

                          <!-- Create a new Notice -->

                          <h5>All Notification</h5>
                          @foreach($notif->all() as $noti)
                          <div class="col-md-4">
                            <div class="alert alert-info">
                              <span>{{$noti->title}}</span>
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
