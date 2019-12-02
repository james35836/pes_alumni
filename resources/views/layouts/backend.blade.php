
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PES Alumni</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="/backend/vendor/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="/backend/vendor/font-awesome/css/font-awesome.min.css">
        <!-- Fontastic Custom icon font-->
        <link rel="stylesheet" href="/backend/css/fontastic.css">
        <!-- Google fonts - Poppins -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="/backend/css/style.blue.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="/backend/css/custom.css">
        <link rel="stylesheet" href="/css/global.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="/favicon.png">

        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />

    </head>
    <body>
        <div class="page">
            <!-- Main Navbar-->
            <header class="header">
                <nav class="navbar">
                    <!-- Search Box-->
                    <div class="search-box">
                        <button class="dismiss"><i class="icon-close"></i></button>
                        <form id="searchForm" action="#" role="search">
                            <input type="search" placeholder="What are you looking for..." class="form-control">
                        </form>
                    </div>
                    <div class="container-fluid">
                        <div class="navbar-holder d-flex align-items-center justify-content-between">
                            <!-- Navbar Header-->
                            <div class="navbar-header">
                                <!-- Navbar Brand -->
                                <a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                                    <div class="brand-text d-none d-lg-inline-block"><span>PES </span><strong>Alumni</strong></div>
                                    <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>PES</strong></div>
                                </a>
                                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn"><span></span><span></span><span></span></a>
                            </div>
                            <!-- Navbar Menu -->
                            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                                <!-- Search-->
                                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                                <!-- Notifications-->
                                {{-- <li class="nav-item dropdown">
                                    <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                                    <ul aria-labelledby="notifications" class="dropdown-menu">
                                        <li>
                                            <a rel="nofollow" href="#" class="dropdown-item">
                                                <div class="notification">
                                                    <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                                                    <div class="notification-time"><small>4 minutes ago</small></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a rel="nofollow" href="#" class="dropdown-item">
                                                <div class="notification">
                                                    <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                                                    <div class="notification-time"><small>4 minutes ago</small></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a rel="nofollow" href="#" class="dropdown-item">
                                                <div class="notification">
                                                    <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                                                    <div class="notification-time"><small>4 minutes ago</small></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a rel="nofollow" href="#" class="dropdown-item">
                                                <div class="notification">
                                                    <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                                                    <div class="notification-time"><small>10 minutes ago</small></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                                    </ul>
                                </li> --}}
                                <!-- Messages                        -->
                                <li class="nav-item dropdown">
                                    <a id="messages" class="nav-link" href="/profile"><i class="fa fa-user-circle-o"></i></a>
                                </li>
                                
                                <!-- Logout    -->
                                <li class="nav-item">
                                    <a  href="{{ route('logout') }}" class="nav-link logout" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"> 
                                    <span class="d-none d-sm-inline"> {{ __('Logout') }}</span><i class="fa fa-sign-out"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="page-content d-flex align-items-stretch">
                <!-- Side Navbar -->
                <nav class="side-navbar ">
                    <!-- Sidebar Header-->
                    <div class="sidebar-header d-flex align-items-center">
                        <a href="/profile">
                            <div class="avatar"><img src="{{ Auth::user()->userinfo->user_profile }}" alt="..." class="img-fluid rounded-circle"></div>
                            <div class="title">
                                <br>
                                <h1 class="h4">{{ Auth::user()->userinfo->name }}</h1>
                                <p>{{ Auth::user()->position }}</p>
                            </div>
                        </a>
                    </div>
                    <!-- Sidebar Navidation Menus--><span class="heading">{{ Auth::user()->position }} </span>

                    <ul class="list-unstyled">
                        @if(Auth::user()->access > 1)
                        <li class="{{ Request::segment(1) == "alumni-dashboard" ? "active" : "" }}"><a href="{{ route('dashboard') }}"> <i class="icon-home"></i>Dashboard </a></li>
                        @endif
                        <li class="{{ Request::segment(1) == "alumni-feeds" ? "active" : "" }}"><a href="{{ route('alumni_feeds') }}"> <i class="icon-home"></i>Alumni Feeds</a></li>
                        <li class="{{ Request::segment(1) == "alumni-list" ? "active" : "" }}"><a href="{{ route('alumni_list') }}"> <i class="icon-home"></i>Alumni List</a></li>
                        <li class="{{ Request::segment(1) == "alumni-faculties" ? "active" : "" }}"><a href="{{ route('alumni_faculties') }}"> <i class="icon-home"></i>Alumni Adviser</a></li>
                        @if(Auth::user()->access > 1)
                        <ul class="list-unstyled">
                            
                            <li>

                                <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Manage </a>
                                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                                    <li class="{{ Request::segment(1) == "pins" ? "active" : "" }}"><a href="{{ route('pins.index') }}"> <i class="icon-home"></i>Codes</a></li>
                                    <li class="{{ Request::segment(1) == "users" ? "active" : "" }}"><a href="{{ route('users.index') }}"> <i class="icon-home"></i>Users</a></li>
                                    <li class="{{ Request::segment(1) == "officers" ? "active" : "" }}"><a href="{{ route('officers') }}"> <i class="icon-home"></i>Officers</a></li>
                                    <li class="{{ Request::segment(1) == "faculties" ? "active" : "" }}"><a href="{{ route('faculties') }}"> <i class="icon-home"></i>Faculties</a></li>
                                    <li class="{{ Request::segment(1) == "products" ? "active" : "" }}"><a href="{{ route('products.index') }}"> <i class="icon-home"></i>Products</a></li>
                                    <li class="{{ Request::segment(1) == "events" ? "active" : "" }}"><a href="/event"> <i class="icon-home"></i>Events</a></li>
                                    <li class="{{ Request::segment(1) == "albums" ? "active" : "" }}"><a href="{{ route('albums.index') }}"> <i class="icon-home"></i>Galleries</a></li>
                                </ul>
                            </li>
                        </ul>
                        @endif

                    </ul>
                </nav>
                <div class="content-inner ">
                    <!-- Page Header-->
                    <header class="page-header">
                        <div class="container-fluid">
                            <h2 class="no-margin-bottom">{{ ucwords(Request::segment(1)) }}</h2>
                        </div>
                    </header>
                    <!-- Dashboard Counts Section-->
                    <main>  
                        @yield('content')
                    </main>
                    <!-- Page Footer-->
                    <footer class="main-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>PES Alumni Association &copy; 2018-{{ date('Y') }}</p>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <p>Powered by:  <a href="https://www.linkedin.com/in/elven-man-on-b6788b141/" class="external">James Omosora</a></p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>

        <!-- JavaScript files-->
        <script src="/backend/vendor/jquery/jquery.min.js"></script>
        <script src="/backend/vendor/popper.js/umd/popper.min.js"> </script>
        <script src="/backend/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="/backend/vendor/jquery.cookie/jquery.cookie.js"> </script>
        {{-- <script src="/backend/vendor/chart.js/Chart.min.js"></script> --}}
        <script src="/backend/vendor/jquery-validation/jquery.validate.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
        {{-- <script src="/backend/js/charts-home.js"></script> --}}
        <!-- Main File-->
        <script src="/backend/js/front.js"></script>
        <script src="/js/backend.js"></script>
        <script type="text/javascript">
            $(function () {
                $('.date-picker').datetimepicker({
                    format: 'L'
                });
            });
        </script>
        
    </body>
</html>

