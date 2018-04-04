<nav class="navbar navbar-default navbar-fixed">

        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div class="collapse navbar-collapse">

              <ul class="nav navbar-nav navbar-right">
                  <li>
                     <a href="">
                         <p>{{ Auth::user()->name }}</p>
                      </a>
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
