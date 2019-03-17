<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Alumni Association</title>
        <!-- Scripts -->
        <!-- Styles -->
        <!-- <link href="{{ asset('css/front.css') }}" rel="stylesheet"> -->
        <link href="/css/back.css" rel="stylesheet">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
        
        <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
        <script type="text/javascript" src="/js/front.js"></script>
        <script type="text/javascript" src="/js/transaction.js"></script>
        <script type="text/javascript">
        $(document).ready(function ()
        {
        $('.leftmenutrigger').on('click', function (e)
        {
        $('.side-nav').toggleClass("open");
        $('#wrapper').toggleClass("open");
        e.preventDefault();
        });
        });
        </script>
        <style type="text/css"> 

        /* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: visible;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.3);
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 1500ms infinite linear;
  -moz-animation: spinner 1500ms infinite linear;
  -ms-animation: spinner 1500ms infinite linear;
  -o-animation: spinner 1500ms infinite linear;
  animation: spinner 1500ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
  box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>
    </head>
    <body >
        <div id="wrapper" class="animate">
            <nav class="navbar header-top fixed-top navbar-expand-lg">
                <!-- <span class="navbar-toggler-icon leftmenutrigger"></span> -->
                <i class="fa fa-bars leftmenutrigger"></i>
                <a class="navbar-brand" href="#" style="color:#fff">Alumni</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav animate side-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/alumni-feeds" title="News Feeds"><i class="fa fa-newspaper-o"></i> News Feeds <i class="fa fa-newspaper-o shortmenu animate"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/alumni-list" title="Comment"><i class="fa fa-graduation-cap"></i> Alumni List <i class="fa fa-graduation-cap shortmenu animate"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/alumni-feeds" title="News Feeds"><i class="fa fa-newspaper-o"></i> News Feeds <i class="fa fa-newspaper-o shortmenu animate"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/alumni-list" title="Cart"><i class="fa fa-bullhorn"></i> Announcement <i class="fa fa-bullhorn shortmenu animate"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/alumni-list" title="Comment"><i class="fa fa-graduation-cap"></i> Alumni List <i class="fa fa-graduation-cap shortmenu animate"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="Comment"><i class="fa fa-handshake-o"></i> Faculty List <i class="fa fa-handshake-o shortmenu animate"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-cogs"></i> Maintenance <i class="fa fa-cogs shortmenu animate"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Control</a>
                                <a class="dropdown-item" href="/maintenance/officer">Officer</a>
                                <a class="dropdown-item" href="/maintenance/shop">Shopping</a>
                                <a class="dropdown-item" href="/maintenance/events">Events</a>
                                <a class="dropdown-item" href="/maintenance/stories">Stories</a>
                                <a class="dropdown-item" href="#">Gallery</a>
                            </div>
                        </li>
                        
                    </ul>
                    <ul class="navbar-nav ml-md-auto d-md-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-user-circle"></i></a>
                        </li> 
                        <!-- <li class="nav-item">
                            <img src="https://images.pexels.com/photos/1204649/pexels-photo-1204649.jpeg?auto=compress&cs=tinysrgb0" class="rounded-circle" style="height: 40px;width:40px;"/>
                        </li> -->
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="#"><i class="fa fa-sign-out></i> Logout</a> -->
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i></a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="">
                <div class="loading" style="display:none;">Loading&#8230;</div>
            @yield('content')
        </main>
        </div>
        
        <!--footer starts from here-->
        <!-- <footer class="footer">
            
            <div class="container">
                <p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>
                <ul class="social_footer_ul">
                    <li><a href="http://kalarikendramdelhi.com"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="http://kalarikendramdelhi.com"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="http://kalarikendramdelhi.com"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="http://kalarikendramdelhi.com"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </footer> -->
        <!-- </div> -->
    </body>
</html>