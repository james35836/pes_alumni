<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PES Alumni</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="97YnMozyQm5c-iZ9mnh6IlILWoBW1XfbsG4dDchIrY4" />
        <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.png">
        <link rel="icon" type="image/png" href="/favicon.png">
        <link rel="apple-touch-icon" href="/favicon.png">
        <!-- Google Fonts
        ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="/backend/css/bootstrap.min.css">
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="/backend/css/font-awesome.min.css">
        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="/backend/css/owl.carousel.css">
        <link rel="stylesheet" href="/backend/css/owl.theme.css">
        <link rel="stylesheet" href="/backend/css/owl.transitions.css">
        <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="/backend/css/animate.css">
        <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="/backend/css/normalize.css">
        <!-- meanmenu icon CSS
        ============================================ -->
        <link rel="stylesheet" href="/backend/css/meanmenu.min.css">
        <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="/backend/css/main.css">
        <!-- dropzone CSS
        ============================================ -->
        <link rel="stylesheet" href="/backend/css/dropzone/dropzone.css">
        <!-- forms CSS
        ============================================ -->
        <link rel="stylesheet" href="/backend/css/form/all-type-forms.css">
        <!-- educate icon CSS
        ============================================ -->
        <link rel="stylesheet" href="/backend/css/educate-custon-icon.css">
        <!-- morrisjs CSS
        ============================================ -->
        <!-- mCustomScrollbar CSS
        ============================================ -->
        <link rel="stylesheet" href="/backend/css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
        ============================================ -->
        <link rel="stylesheet" href="/backend/css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="/backend/css/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
        ============================================ -->
        <link rel="stylesheet" href="/backend/css/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="/backend/css/calendar/fullcalendar.print.min.css">

        <link rel="stylesheet" href="/backend/css/summernote/summernote.css">
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="/backend/style.css">
        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="/backend/css/responsive.css">
        <!-- modals CSS
        ============================================ -->
        <link rel="stylesheet" href="/backend/css/modals.css">
        <link rel="stylesheet" href="/css/loader.css">
        <link rel="stylesheet" href="/css/global.css">
        <!-- modernizr JS
        ============================================ -->
        <script src="/backend/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=333100980642795&autoLogAppEvents=1"></script>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Start Left menu area -->
        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="index.html"><img class="main-logo" src="/img/logo.jpg" alt="" /></a>
                    <strong><a href="index.html"><img class="small-logo" src="/img/logo-small.jpg" alt="" /></a></strong>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <?php
                                $dashboard_page = [4,3];
                                $maintenance_page = [4,3];
                            ?>

                            @if(in_array(Auth::user()->access,$dashboard_page))
                            <li>
                                <a title="Dashboard Page" href="/alumni-dashboard" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Dashboards</span></a>
                            </li>
                            @endif
                            <li>
                                <a title="Feed Page" href="/alumni-feeds" aria-expanded="false"><span class="educate-icon educate-library icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">News Feed</span></a>
                            </li>
                            <li>
                                <a title="List Page" href="/alumni-list" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Alumni List</span></a>
                            </li>
                            <li>
                                <a title="Faculties Page" href="/alumni-faculties" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Professor List</span></a>
                            </li>
                            @if(in_array(Auth::user()->access,$maintenance_page))
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Maintenance</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="All Students" href="/manage/user"><span class="mini-sub-pro"> Alumni Users</span></a></li>
                                    <li><a title="All Students" href="/manage/officer"><span class="mini-sub-pro"> Alumni Officers</span></a></li>
                                    <li><a title="Add Students" href="/manage/product"><span class="mini-sub-pro">Alumni Products</span></a></li>
                                    <li><a title="Edit Students" href="/manage/events"><span class="mini-sub-pro"> Alumni Events</span></a></li>
                                    <li><a title="Students Profile" href="/manage/stories"><span class="mini-sub-pro">Alumni Stories</span></a></li>
                                    <li><a title="Students Profile" href="/manage/albums"><span class="mini-sub-pro">Alumni Galleries</span></a></li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
        <!-- End Left menu area -->
        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid logo-container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="/"><img class="main-logo" src="/backend/img/logo/logo.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-advance-area">
                <div class="header-top-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="header-top-wraper">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                            <div class="menu-switcher-pro">
                                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                            
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                                            <div class="header-right-info">
                                                <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                    
                                                    <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="{{Auth::user()->userinfo->user_profile}}" alt="" />
                                                        <span class="admin-name">{{ Auth::user()->userinfo->name }}</span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="/alumni-profile?view=my-account&user={{Auth::user()->id}}"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a></li>
                                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a></li>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-menu"></i></a>
                                                    <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            
                                                            
                                                            <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content custom-bdr-nt">
                                                        
                                                        
                                                        <div id="Settings" class="tab-pane fade in active">
                                                            <div class="setting-panel-area">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="fa fa-gears"></i> Settings Panel</h2>
                                                                    <p> You have 20 Settings. 5 not completed.</p>
                                                                </div>
                                                                <ul class="setting-panel-list">
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Show notifications</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                        <label class="onoffswitch-label" for="example">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Disable Chat</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                                        <label class="onoffswitch-label" for="example3">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Enable history</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                        <label class="onoffswitch-label" for="example4">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Show charts</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                                        <label class="onoffswitch-label" for="example7">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Update everyday</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                                                                        <label class="onoffswitch-label" for="example2">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Global search</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                                                                        <label class="onoffswitch-label" for="example6">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Offline users</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                        <label class="onoffswitch-label" for="example5">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-area">
            
            <div class="container text-center">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="/alumni-dashboard"><span class="educate-icon educate-charts icon-wrap"></span></a></li>
                    <li class="list-inline-item"><a href="/alumni-feeds"><span class="educate-icon educate-library icon-wrap"></span></a></li>
                    <li class="list-inline-item"><a href="/alumni-list"><span class="educate-icon educate-student icon-wrap"></span></a></li>
                    <li class="list-inline-item"><a href="/alumni-faculties"><span class="educate-icon educate-professor icon-wrap"></span></a></li>
                    <li class="list-inline-item"><a href="/alumni-faculties"><span class="educate-icon educate-pages icon-wrap"></span></a></li>
                </ul>

                
              
        </div>
    </div>

    <?php
        
    ?>
    @if(Request::segment(1) == "alumni-list" && Request::segment(1) == "alumni-faculties")
    <div class="top-space" style="height:20px;"></div>
    @else
    
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><b>{{ucwords(str_replace('-',' ',Request::segment(1)))}} {{ucwords(Request::segment(2))}}</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
<main style="min-height: 510px;">
<div class="loading" style="display:none;">Loading&#8230;</div>
<div id="return_alert">
    <div id="return_alert_icon"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
    <div id="return_alert_text">SUCCESS</div>
</div>
@yield('content')
</main>
<div class="footer-copyright-area">
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="footer-copy-right">
            <p>Copyright © 2018. All rights reserved. Powered by <a target="_blank" href="https://www.linkedin.com/in/elven-man-on-b6788b141/">James Omosora</a></p>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- jquery
============================================ -->
<script src="/backend/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
============================================ -->
<script src="/backend/js/bootstrap.min.js"></script>
<!-- wow JS
============================================ -->
<script src="/backend/js/wow.min.js"></script>
<!-- price-slider JS
============================================ -->
<script src="/backend/js/jquery-price-slider.js"></script>
<!-- meanmenu JS
============================================ -->
<script src="/backend/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
============================================ -->
<script src="/backend/js/owl.carousel.min.js"></script>
<!-- sticky JS
============================================ -->
<script src="/backend/js/jquery.sticky.js"></script>
<!-- scrollUp JS
============================================ -->
<script src="/backend/js/jquery.scrollUp.min.js"></script>
<!-- counterup JS
============================================ -->
<script src="/backend/js/counterup/jquery.counterup.min.js"></script>
<script src="/backend/js/counterup/waypoints.min.js"></script>
<script src="/backend/js/counterup/counterup-active.js"></script>
<!-- mCustomScrollbar JS
============================================ -->
<script src="/backend/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/backend/js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
============================================ -->
<script src="/backend/js/metisMenu/metisMenu.min.js"></script>
<script src="/backend/js/metisMenu/metisMenu-active.js"></script>
<!-- morrisjs JS
============================================ -->
<!-- morrisjs JS
============================================ -->
<script src="/backend/js/sparkline/jquery.sparkline.min.js"></script>
<script src="/backend/js/sparkline/jquery.charts-sparkline.js"></script>
<script src="/backend/js/sparkline/sparkline-active.js"></script>
<!-- calendar JS
============================================ -->
<script src="/backend/js/calendar/moment.min.js"></script>
<script src="/backend/js/calendar/fullcalendar.min.js"></script>
<script src="/backend/js/calendar/fullcalendar-active.js"></script>
<!-- plugins JS
============================================ -->
<script src="/backend/js/plugins.js"></script>
<!-- main JS
============================================ -->
<script src="/backend/js/main.js"></script>
<!-- tawk chat JS
============================================ -->
<!-- <script src="/backend/js/tawk-chat.js"></script> -->
<!-- maskedinput JS
============================================ -->
<script src="/backend/js/jquery.maskedinput.min.js"></script>
<script src="/backend/js/masking-active.js"></script>
<!-- datepicker JS
============================================ -->
<script src="/backend/js/datepicker/jquery-ui.min.js"></script>
<script src="/backend/js/datepicker/datepicker-active.js"></script>
<!-- form validate JS
============================================ -->
<script src="/backend/js/form-validation/jquery.form.min.js"></script>
<script src="/backend/js/form-validation/jquery.validate.min.js"></script>
<script src="/backend/js/form-validation/form-active.js"></script>
<!-- dropzone JS
============================================ -->
<script src="/backend/js/dropzone/dropzone.js"></script>

<script src="/backend/js/summernote/summernote.min.js"></script>
<script src="/backend/js/summernote/summernote-active.js"></script>
<!-- tab JS
============================================ -->
<script src="/backend/js/tab.js"></script>
<script type="text/javascript" src="/js/transaction.js"></script>




</body>
</html>