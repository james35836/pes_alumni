@extends('layouts.frontend')
@section('content')
<div id="blog-page-contain">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                
                
                <div id="left">
                    <div class="single-post-item">
                        <div class="post-image"> <a href="#"><img src="{{$event->thumbnail}}" alt=""></a> </div>
                        <div class="single-post-details">
                            <div class="post-title">
                                <h4><a href="#">{{$event->name}}</a></h4>
                            </div>
                            <div class="description">
                                <p>{{$event->description}}</p>
                                <br>
                                
                                <div class="post-meta">
                                    <div class="chat"> <a href="#"> <span class="chat-number">Posted By</span> <span class="chat-number">{{$event->user->userinfo->name}}</span> </a> </div>
                                    <div class="chat"> <a href="#"> <i class="fa fa-comment"></i> <span class="chat-number">324</span> </a> </div>
                                    <div class="date"> {{$event->date_format}}</div>
                                    <div class="comments"> <a href="#"> <i class="fa fa-share"></i> <span class="comments-number">324</span> </a> </div>
                                </div>
                                <br>
                                <br>
                                <div class="social-link">
                                            <ul>
                                                <li><a class="facebook customer share" href="https://www.facebook.com/sharer.php?u={{$_SERVER['HTTP_HOST']}}/events" title="Facebook share" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter customer share" href="https://twitter.com/share?url=https://codepen.io/patrickkahl&amp;text=Share popup on &amp;hashtags=codepen" title="Twitter share" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="linkedin customer share" href="https://www.linkedin.com/shareArticle?mini=true&url=https://codepen.io/patrickkahl" title="linkedin Share" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="comments-area">
                        <h4>Comments<span>(2)</span></h4>
                        <ul class="comment-list ">
                            <li>
                                <div class="comment-user"> <img src="/frontend/images/comment-user.jpg" alt="further"> </div>
                                <div class="comment-detail">
                                    <h6>John Doe</h6>
                                    <div class="post-info">
                                        <ul>
                                            <li>Fab 11, 2016</li>
                                            <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                        </ul>
                                    </div>
                                    <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                </div>
                                <ul class="comment-list child-comment">
                                    <li>
                                        <div class="comment-user"> <img src="/frontend/images/comment-user.jpg" alt="further"> </div>
                                        <div class="comment-detail">
                                            <h6>John Doe</h6>
                                            <div class="post-info">
                                                <ul>
                                                    <li>Fab 11, 2016</li>
                                                    <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                </ul>
                                            </div>
                                            <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-user"> <img src="/frontend/images/comment-user.jpg" alt="further"> </div>
                                        <div class="comment-detail">
                                            <h6>John Doe</h6>
                                            <div class="post-info">
                                                <ul>
                                                    <li>Fab 11, 2016</li>
                                                    <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                </ul>
                                            </div>
                                            <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="comment-user"> <img src="/frontend/images/comment-user.jpg" alt="further"> </div>
                                <div class="comment-detail">
                                    <h6>John Doe</h6>
                                    <div class="post-info">
                                        <ul>
                                            <li>Fab 11, 2016</li>
                                            <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                        </ul>
                                    </div>
                                    <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3">
                <div id="right">
                    <div class="sidebar-widget">
                        <a class="twitter-timeline" href="https://twitter.com/JTheGreats?ref_src=twsrc%5Etfw">Tweets by JTheGreats</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection