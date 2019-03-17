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
        <link href="/css/front.css" rel="stylesheet">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        
        <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
        <script type="text/javascript" src="/js/front.js"></script>
    </head>
    <body>
        <header class="topbar">
            <div class="container">
                <div class="row">
                    <!-- social icon-->
                    <div class="col-sm-12">
                        <ul class="social-network">
                            <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- <div id="app"> -->
        <nav class="navbar navbar-expand-lg navbar-light bg-custom">
            <a class="navbar-brand" href="#">P.E.S. Alumni </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">HOME
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/alumni/stories">STORIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/alumni/shopping">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/alumni/events">EVENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/alumni/about">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/alumni/contact">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-warning" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                    </li>
                </ul>
                
            </div>
        </nav>
        <main class="">
            @yield('content')
        </main>
        <!--footer starts from here-->
        <footer class="footer">
            <div class="container bottom_border">
                <div class="row">
                    <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
                        <!--headin5_amrc-->
                        <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
                        <p><i class="fa fa-phone"></i>  +91-9999878398  </p>
                        <p><i class="fa fa fa-envelope"></i> info@example.com  </p>
                    </div>
                    <div class=" col-sm-4 col-md  col-6 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                        <!--headin5_amrc-->
                        <ul class="footer_ul_amrc">
                            <li><a href="http://kalarikendramdelhi.com">Image Rectoucing</a></li>
                            <li><a href="http://kalarikendramdelhi.com">Clipping Path</a></li>
                            <li><a href="http://kalarikendramdelhi.com">Hollow Man Montage</a></li>
                            <li><a href="http://kalarikendramdelhi.com">Ebay & Amazon</a></li>
                            <li><a href="http://kalarikendramdelhi.com">Hair Masking/Clipping</a></li>
                            <li><a href="http://kalarikendramdelhi.com">Image Cropping</a></li>
                        </ul>
                        <!--footer_ul_amrc ends here-->
                    </div>
                    <div class=" col-sm-4 col-md  col-6 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                        <!--headin5_amrc-->
                        <ul class="footer_ul_amrc">
                            <li><a href="http://kalarikendramdelhi.com">Remove Background</a></li>
                            <li><a href="http://kalarikendramdelhi.com">Shadows & Mirror Reflection</a></li>
                            <li><a href="http://kalarikendramdelhi.com">Logo Design</a></li>
                            <li><a href="http://kalarikendramdelhi.com">Vectorization</a></li>
                            <li><a href="http://kalarikendramdelhi.com">Hair Masking/Clipping</a></li>
                            <li><a href="http://kalarikendramdelhi.com">Image Cropping</a></li>
                        </ul>
                        <!--footer_ul_amrc ends here-->
                    </div>
                    <div class=" col-sm-4 col-md  col-12 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                        <!--headin5_amrc ends here-->
                        <ul class="footer_ul2_amrc">
                            <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
                            <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
                            <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
                        </ul>
                        <!--footer_ul2_amrc ends here-->
                    </div>
                </div>
            </div>
            <div class="container">
                <!--foote_bottom_ul_amrc ends here-->
                <p class="text-center">PES Alumni Association &#9400; {{date('Y')}} | Powered by <a href="https://www.linkedin.com/in/elven-man-on-b6788b141/">James Omosora</a></p>
                <ul class="social_footer_ul">
                    <li><a href="http://kalarikendramdelhi.com"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="http://kalarikendramdelhi.com"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="http://kalarikendramdelhi.com"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="http://kalarikendramdelhi.com"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <!--social_footer_ul ends here-->
            </div>
        </footer>
        <!-- </div> -->
    </body>
</html>