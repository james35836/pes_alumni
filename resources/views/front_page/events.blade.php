@extends('layouts.frontend')
@section('content')

<div id="blog-page-contain">
    <div class="container">
        <div class="row">
            <!-- left block Start  -->
            <div class="col-md-9">
                <div id="left">


                     @foreach($_event as $event)
                    <div class="post-item">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="post-image"> <a href="#"><img src="{{$event->thumbnail}}" alt=""></a> </div>
                            </div>
                            <div class="col-md-7">
                                <div class="content-details">
                                    <div class="post-title">
                                        <h3><a href="single-post.html">{{$event->name}}</a></h3>
                                    </div>
                                    <div class="description">
                                        <p>{{$event->description}}</p>
                                        <div class="post-meta">
                                            <div class="chat"><a href="#"><i class="fa fa-comment"></i><span class="chat-number"> 324</span></a> </div>
                                            <div class="date"><span class="date-month">Jan</span><span class="date-day"> 16</span><span class="date-year">2015</span> </div>
                                            <div class="comments"><a href="#"><i class="fa fa-share"></i><span class="comments-number"> 324</span></a></div>
                                        </div>
                                        <div class="read-more"> <a href="single-post.html" class="read-more">read more <i class="fa fa-long-arrow-right"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
            <!-- left block end  -->
            
            <!-- right block Start  -->
            <div class="col-md-3">
                <div id="right">
                    <div class="sidebar-widget">
                        <div class="sidebar-title">
                            <h4> Categories</h4>
                        </div>
                        <ul class="title-toggle">
                            <li><a href="blog.html">Photoshop (10)</a></li>
                            <li><a href="blog.html">WordPress (4)</a></li>
                            <li><a href="blog.html">Core PHP (5)</a></li>
                            <li><a href="blog.html">Graphic Design (15)</a></li>
                            <li><a href="blog.html">e-Commerce Developars (3)</a></li>
                            <li><a href="blog.html">Android Dev (7)</a></li>
                            <li><a href="blog.html">Web Designing (9)</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget">
                        <div class="sidebar-title">
                            <h4>Tags</h4>
                        </div>
                        <ul class="tagcloud title-toggle">
                            <li><a href="#">gallery</a></li>
                            <li><a href="#">grid</a></li>
                            <li><a href="#">large</a></li>
                            <li><a href="#">quote</a></li>
                            <li><a href="#">personal</a></li>
                            <li><a href="#">simple</a></li>
                            <li><a href="#">Wedding</a></li>
                            <li><a href="#">slider</a></li>
                            <li><a href="#">trending</a></li>
                            <li><a href="#">youtube</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget latest-blog">
                        <div class="sidebar-title">
                            <h4>Latest blog</h4>
                        </div>
                        <ul class="title-toggle">
                            <li>
                                <div class="blog-post ">
                                    <div class="item col-md-4 col-xs-4">
                                        <div class="image"><a href="blog.html"><img class="img-responsive" title="T-shirt" alt="T-shirt" src="/frontend/images/blog2.jpg"></a> </div>
                                    </div>
                                    <div class="item col-md-8 col-xs-8">
                                        <div class="blog-details">
                                            <div class="blog-name">
                                                <h5><a href="blog.html">Black African Print Pencil Skirt </a></h5>
                                                <span class="blog-date">06/07/2015</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-post ">
                                        <div class="item col-md-4 col-xs-4">
                                            <div class="image"><a href="blog.html"><img class="img-responsive" title="T-shirt" alt="T-shirt" src="/frontend/images/blog3.jpg"></a> </div>
                                        </div>
                                        <div class="item col-md-8 col-xs-8">
                                            <div class="blog-details">
                                                <div class="blog-name">
                                                    <h5><a href="blog.html">Black African Print Pencil Skirt </a></h5>
                                                    <span class="blog-date">06/07/2015</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog-post ">
                                            <div class="item col-md-4 col-xs-4">
                                                <div class="image"><a href="blog.html"><img class="img-responsive" title="T-shirt" alt="T-shirt" src="/frontend/images/blog4.jpg"></a> </div>
                                            </div>
                                            <div class="item col-md-8 col-xs-8">
                                                <div class="blog-details">
                                                    <div class="blog-name">
                                                        <h5><a href="blog.html">Black African Print Pencil Skirt </a></h5>
                                                        <span class="blog-date">06/07/2015</span> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="blog-post ">
                                                <div class="item col-md-4 col-xs-4">
                                                    <div class="image"><a href="blog.html"><img class="img-responsive" title="T-shirt" alt="T-shirt" src="/frontend/images/blog5.jpg"></a> </div>
                                                </div>
                                                <div class="item col-md-8 col-xs-8">
                                                    <div class="blog-details">
                                                        <div class="blog-name">
                                                            <h5><a href="blog.html">Black African Print Pencil Skirt </a></h5>
                                                            <span class="blog-date">06/07/2015</span> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- left block end  -->
                        </div>
                    </div>
                </div>
                <!-- <link href="{{ asset('css/events.css') }}" rel="stylesheet">
                <style type="text/css">
                .message-item {
                margin-bottom: 25px;
                margin-left: 40px;
                position: relative;
                }
                .message-item .message-inner {
                background: #fff;
                border: 1px solid #ddd;
                border-radius: 3px;
                padding: 10px;
                position: relative;
                }
                .message-item .message-inner:before {
                border-right: 10px solid #ddd;
                border-style: solid;
                border-width: 10px;
                color: rgba(0,0,0,0);
                content: "";
                display: block;
                height: 0;
                position: absolute;
                left: -20px;
                top: 6px;
                width: 0;
                }
                .message-item .message-inner:after {
                border-right: 10px solid #fff;
                border-style: solid;
                border-width: 10px;
                color: rgba(0,0,0,0);
                content: "";
                display: block;
                height: 0;
                position: absolute;
                left: -18px;
                top: 6px;
                width: 0;
                }
                .message-item:before {
                background: #fff;
                border-radius: 2px;
                bottom: -30px;
                box-shadow: 0 0 3px rgba(0,0,0,0.2);
                content: "";
                height: 100%;
                left: -30px;
                position: absolute;
                width: 3px;
                }
                .message-item:after {
                background: #fff;
                border: 2px solid #ccc;
                border-radius: 50%;
                box-shadow: 0 0 5px rgba(0,0,0,0.1);
                content: "";
                height: 15px;
                left: -36px;
                position: absolute;
                top: 10px;
                width: 15px;
                }
                .clearfix:before, .clearfix:after {
                content: " ";
                display: table;
                }
                .message-item .message-head {
                border-bottom: 1px solid #eee;
                margin-bottom: 8px;
                padding-bottom: 8px;
                }
                .message-item .message-head .avatar {
                margin-right: 20px;
                }
                .message-item .message-head .user-detail {
                overflow: hidden;
                }
                .message-item .message-head .user-detail h5 {
                font-size: 16px;
                font-weight: bold;
                margin: 0;
                }
                .message-item .message-head .post-meta {
                float: left;
                padding: 0 15px 0 0;
                }
                .message-item .message-head .post-meta >div {
                color: #333;
                font-weight: bold;
                text-align: right;
                }
                .post-meta > div {
                color: #777;
                font-size: 12px;
                line-height: 22px;
                }
                .message-item .message-head .post-meta >div {
                color: #333;
                font-weight: bold;
                text-align: right;
                }
                .post-meta > div {
                color: #777;
                font-size: 12px;
                line-height: 22px;
                }
                img {
                min-height: 40px;
                max-height: 40px;
                }
                </style>
                
                <section id="contact">
                    <div class="container mt-5 mb-5">
                        <h3 class="h3">Latest Events </h3>
                        <div class="row">
                            @foreach($_event as $event)
                            <div class="qa-message-list" id="wallmessages">
                                <div class="message-item" id="m16">
                                    <div class="message-inner">
                                        <div class="message-head clearfix">
                                            <div class="avatar pull-left"><a href="./index.php?qa=user&qa_1=Oleg+Kolesnichenko"><img src="{{$event->thumbnail}}"></a></div>
                                            <div class="user-detail">
                                                <h5 class="handle">{{$event->name}}</h5>
                                                <div class="post-meta">
                                                    <div class="asker-meta">
                                                        <span class="qa-message-what"></span>
                                                        <span class="qa-message-when">
                                                            <span class="qa-message-when-data">Jan 21</span>
                                                        </span>
                                                        <span class="qa-message-who">
                                                            <span class="qa-message-who-pad">by </span>
                                                            <span class="qa-message-who-data"><a href="./index.php?qa=user&qa_1=Oleg+Kolesnichenko">Oleg Kolesnichenko</a></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="qa-message-content">
                                            {{$event->description}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    -->
                    @endsection