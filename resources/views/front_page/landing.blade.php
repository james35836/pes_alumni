@extends("layouts.frontend")
@section("content")
<link rel="stylesheet" href="/frontend/css/DioProgress.css" type="text/css">
        <script src="/frontend/js/DioProgress.js"></script>
<!-- Main Banner Start-->
<div id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="main-slider" class="owl-carousel">
                    <div class="item"><img src="https://images.pexels.com/photos/1043506/pexels-photo-1043506.jpeg?auto=compress&cs=tinysrgb&h=529&w=1170" alt="main-banner1"></div>
                    <div class="item"><img src="https://images.pexels.com/photos/1043506/pexels-photo-1043506.jpeg?auto=compress&cs=tinysrgb&h=529&w=1170" alt="main-banner2"></div>
                    <div class="item"><img src="https://images.pexels.com/photos/1043506/pexels-photo-1043506.jpeg?auto=compress&cs=tinysrgb&h=529&w=1170" alt="main-banner3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Latest News block Start  -->
<div id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 news">
                <div class="Latest-News-title">
                    <h2 class="tf">Latest Events!</h2>
                </div>
                <div class= "customNavigation"> <a class="btn Latest_prev prev"><i class="fa fa-angle-left"></i></a> <a class="btn Latest_next next"><i class="fa fa-angle-right"></i></a> </div>
                <div id="Latest-News" class="owl-carousel ">
                    @foreach($_event as $event)
                    <div class="item">
                        <div class="post">
                            <div class="image"> <a href="blog.html"><img src="{{$event->post_image}}" alt="post" title="post" class="img-responsive"></a> </div>
                            <div class="content-details">
                                <div class="post-title">
                                    <h3><a href="blog.html">{{$event->name}}</a></h3>
                                </div>
                                <div class="description">
                                    <p class="discription-height">{!!$event->description!!}</p>
                                    <div class="read-more"> <a href="/posts/details?id={{$event->id}}&name={{$event->name}}" class="read-more">read more <i class="fa fa-long-arrow-right"></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
            <!-- <div class="col-md-3 special">
                <div class="Special-title">
                    <h2 class="tf">Best<samp> Offers</samp></h2>
                </div>
                <div class= "customNavigation"> <a class="special_prev"><i class="fa fa-angle-left"></i></a>
                <div id="owlStatus">
                    <div class="currentItem">
                        <div class="result"></div>
                    </div>
                    /
                    <div class="owlItems">
                        <div class="result"></div>
                    </div>
                </div>
                <a class="special_next"><i class="fa fa-angle-right"></i></a> </div>
                <div class="Special-product">
                    <div id="special" class="owl-carousel">
                        <div class="item"><a href="#"><img src="/frontend/images/special-banner.jpg" alt="#"></a> </div>
                        <div class="item"><a href="#"><img src="/frontend/images/special-banner2.jpg" alt="#"></a></div>
                        <div class="item"><a href="#"><img src="/frontend/images/special-banner3.jpg" alt="#"></a></div>
                        <div class="item"><a href="#"><img src="/frontend/images/special-banner4.jpg" alt="#"></a></div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Latest News block End  -->

<!-- Brand logo block Start  -->
<div id="brand">
<div class="container">
    <div class="row brand">
        <div class="col-md-12">
            <div id="brand-logo" class="owl-carousel">
                <div class="item"><a href="#"><img src="/frontend/images/brand1.png" alt="#"></a></div>
                <div class="item"><a href="#"><img src="/frontend/images/brand2.png" alt="#"></a></div>
                <div class="item"><a href="#"><img src="/frontend/images/brand3.png" alt="#"></a></div>
                <div class="item"><a href="#"><img src="/frontend/images/brand4.png" alt="#"></a></div>
                <div class="item"><a href="#"><img src="/frontend/images/brand5.png" alt="#"></a></div>
                <div class="item"><a href="#"><img src="/frontend/images/brand6.png" alt="#"></a></div>
                <div class="item"><a href="#"><img src="/frontend/images/brand7.png" alt="#"></a></div>
                <div class="item"><a href="#"><img src="/frontend/images/brand8.png" alt="#"></a></div>
                <div class="item"><a href="#"><img src="/frontend/images/brand9.png" alt="#"></a></div>
            </div>
            <div class= "customNavigation"> <a class="btn brand_prev prev"><i class="fa fa-angle-left"></i></a> <a class="btn brand_next next"><i class="fa fa-angle-right"></i></a> </div>
        </div>
    </div>
</div>
</div>
<!-- Brand logo block End  -->

@endsection


<!-- 
<link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('https://images.pexels.com/photos/1345085/pexels-photo-1345085.jpeg?auto=compress&cs=tinysrgb')">
                <div class="carousel-caption">
                    <div class="content">
                        <h1>Inspiration</h1>
                        <p class="lead">“A dream doesn't become reality through magic; it takes sweat, determination and hard work.”</p>
                        <a class="btn btn-outline-warning btn-lg" href="/register">Join Now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://images.pexels.com/photos/1204649/pexels-photo-1204649.jpeg?auto=compress&cs=tinysrgb0')">
                <div class="carousel-caption">
                    <div class="content">
                        <h1>Motivation</h1>
                        <p class="lead">“There will be obstacles. There will be doubters. There will be mistakes. But with hard work, there are no limits.”</p>
                        <a class="btn btn-outline-warning btn-lg" href="/register">Join Now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://images.pexels.com/photos/1345089/pexels-photo-1345089.jpeg?auto=compress&cs=tinysrgb')">
                <div class="carousel-caption">
                    <div class="content">
                        <h1>Hard Work</h1>
                        <p class="lead">“Happiness is not something you postpone for the future; it is something you design for the present.”</p>
                        <a class="btn btn-outline-warning btn-lg" href="/register">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
<div class="container">
    <style type="text/css">
    .card-about
    {
    border-radius: 50%;
    width: 200px;
    height: 200px;
    background: #f3f3f3;
    }
    .card-about .fa
    {
    margin-top:25%;
    }
    </style>
    
</div>
<div class="container marketing text-center pt-4">
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-about m-auto">
                <div class="card-block">
                    <h2><i class="fa fa-road fa-3x"></i></h2>
                </div>
            </div>
            <h2>Mission</h2>
            <p class="about-landing">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-outline-info " href="/alumni/about" role="button">View details »</a></p>
        </div>
        <div class="col-lg-4">
            <div class="card card-about m-auto">
                <div class="card-block">
                    <h2><i class="fa fa-recycle fa-3x"></i></h2>
                </div>
                
            </div>
            <h2>Vision</h2>
            <p class="about-landing">
            Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p>
                <a class="btn btn-outline-info" href="/alumni/about" role="button">View details »</a></p>
            </div>
            <div class="col-lg-4">
                <div class="card card-about m-auto">
                    <div class="card-block">
                        <h2><i class="fa fa-deaf fa-3x"></i></h2>
                    </div>
                    
                </div>
                <h2>Goals</h2>
                <p class="about-landing">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-outline-info" href="/alumni/about" role="button">View details »</a></p>
            </div>
        </div>
    </div> -->
    
