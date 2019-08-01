<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="google-site-verification" content="97YnMozyQm5c-iZ9mnh6IlILWoBW1XfbsG4dDchIrY4" />
        <title>PES | Alumni</title>
        <meta content="" name="description">
        <meta content="" name="author">
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.png">
        <link rel="icon" type="image/png" href="/favicon.png">
        <link rel="apple-touch-icon" href="/favicon.png">
        <link href="/frontend/Bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/frontend/css/style.css" rel="stylesheet" type="text/css">
        <link href="/frontend/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Poppins:300,500,600,700' rel='stylesheet' type='text/css'>
        <link href="/frontend/css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/frontend/css/DioProgress.css" type="text/css">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="/frontend/js/DioProgress.js"></script>
        <script src="/js/sharelink.js"></script>
        <script src="/js/frontend.js"></script>
        <meta property="og:image" content="/img/logo.jpg" />
        <link rel="stylesheet" href="/css/loader.css">
        <link rel="stylesheet" href="/frontend/css/gallery.css">
    </head>
    <body id="index">
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=333100980642795&autoLogAppEvents=1"></script>
        <div class="wrapar">
            <div class="header">
                <div class="header-top">
                    <div class="container">
                        <div class="call pull-left">
                            <p>Call us : <span>+63936 793 2821</span></p>
                        </div>
                        <div class="user-info pull-right">
                            <div class="user">
                                <ul>
                                    <li><a href="/sign-in">Login</a>
                                    
                                </li>
                                <li><a href="/sign-up">Register</a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mid">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 header-left">
                        <div class="logo"> <a href="/"><img src="/img/logo.jpg" alt="#"></a> </div>
                    </div>
                    <div class="col-md-6 search_block d-none">
                        <div class="search">
                            <form action="grid-view.html">
                                <div class="search_cat">
                                    <select class="search-category" name="search-category">
                                        <option class="computer" selected>All Categories</option>
                                        <option class="computer">Men</option>
                                        <option class="computer">Women</option>
                                        <option class="computer">Kids</option>
                                        <option class="computer">Computer</option>
                                        <option class="computer">Electronics</option>
                                    </select>
                                    <span class="fa fa-angle-down"></span> </div>
                                    <input type="text" placeholder="Search...">
                                    <button type="submit" class="btn submit"> <span class="fa fa-search"></span></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 header-right">
                            <div class="cart">
                                <div class="cart-icon dropdown"></div>
                                <a class="dropdown-toggle" href="/cart">My Cart( <b id="cart-count-number">{{ $cart_count }}</b> )</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="new-further">
                                <p>Alumni Offers  : </p>
                                <ul class="toggle-newinFurther">
                                    <li><a href="#">Trainings</a></li>
                                    <li><a href="#">Feedings</a></li>
                                    <li><a href="#">Bayanihan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
        <!-- Main menu Start -->
        <div id="main-menu">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button aria-controls= "navbar" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a href="#" class="navbar-brand">menu</a> </div>
                        <div class="navbar-collapse collapse" id="navbar">
                            <ul class="nav navbar-nav">
                                <li><a href="/">HOME</a></li>
                                <li><a href="/shopping">SHOPPING</a><span class="new">new</span></li>
                                <li><a href="/events">EVENTS</a></li>
                                <li><a href="/stories">STORIES</a></li>
                                <li><a href="/gallery">GALLERY</a></li>
                                <li><a href="/contact">CONTACT US</a></li>
                                <li><a href="/about">ABOUT US</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Main menu End -->
            <main class="py-4">
                <div class="loading" style="display:none;">Loading&#8230;</div>
                <div id="return_alert">
                    <div id="return_alert_icon"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
                    <div id="return_alert_text">SUCCESS</div>
                </div>
                @if(Request::segment(2))
                {{-- <div id="bread-crumb">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="page-title text-capital">
                                    <h4>{{ Request::segment(1) }}</h4>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <div class="bread-crumb">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li>/</li>
                                        <li><a href="/{{ Request::segment(2) }}">{{ Request::segment(1) }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                @endif
                @yield('content')
            </main>
            <!-- Footer block Start  -->
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class= "newslatter">
                                <form>
                                    <h2 class="tf">Be The First To Hear Our Exciting News</h2>
                                    <p>Enter your email below to receive all the news and events.</p>
                                    <div class="input-group">
                                        <input class=" form-control" type="text" placeholder="Email Here......">
                                        <button type="submit" value="Sign up" class="btn btn-large btn-primary">Sign up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="about">
                                <div class="footer-logo">
                                    <img src="/img/logo.jpg" alt="#">
                                </div>
                                <p>We'll start with the obvious reason. One of the main purposes of alumni associations is to support a network of former graduates who will, in turn, help to raise the profile of the university. </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="new-store">
                                <h4>What we offer</h4>
                                <ul class="toggle-footer">
                                    <li><a href="#">Trainings</a></li>
                                    <li><a href="#">Bayanihan</a></li>
                                    <li><a href="#">Feedings</a></li>
                                    <li><a href="#">Events</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="information">
                                <h4>About Us</h4>
                                <ul class="toggle-footer">
                                    <li><a href="/about">Our Officers</a></li>
                                    <li><a href="/about">Vision</a></li>
                                    <li><a href="/about">Mission</a></li>
                                    <li><a href="/about">Goals</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact">
                                <h4>Contact Us</h4>
                                <ul class="toggle-footer">
                                    <li> <i class="fa fa-map-marker"></i>
                                        <div class="address-info">Paloc Elementary School,<br> Paloc Maragusan Compostela Valley</div>
                                    </li>
                                    <li> <i class="fa fa-mobile"></i>
                                        <div class="call-info">+09367932821<br>
                                            <span>+0987-654-321</span> </div>
                                        </li>
                                        <li> <i class="fa fa-envelope"></i>
                                            <div class="email-info"> <a href="#">pes.alumni@gmail.com</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="social-link">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="footer-link">
                                        <ul>
                                            <li><a href="/events">Events</a></li>
                                            <li><a href="/about">About Us</a></li>
                                            <li><a href="/contact">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="copy-right">
                                        <p> All Rights Reserved. Copyright {{date('Y')}} Powered by <a target="_blank" href="https://www.linkedin.com/in/elven-man-on-b6788b141/">James Omosora</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-offer">
                            <h2></h2>
                        </div>
                    </div>
                </footer>
                <!-- Footer block End  -->
            </div>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="/frontend/js/jQuery.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="/frontend/Bootstrap/js/bootstrap.js"></script>
            <script src="/frontend/js/owl.carousel.min.js"></script>
            <script src="/frontend/js/globle.js"></script>
            <script src="/js/transaction.js"></script>
            <script src="/frontend/js/accordion.js"></script>

            
        </body>
    </html>