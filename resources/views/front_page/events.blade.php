@extends('layouts.frontend')
@section('content')
<div id="blog-page-contain">
    <div class="container">
        <div class="row">
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
                                    <div class="post-title text-capital">
                                        <h3><a href="/events/details?date={{$event->date_format}}&id={{$event->id}}&name={{$event->name}}">{{$event->name}}</a></h3>
                                    </div>
                                    <div class="description">
                                        <p>{{$event->description}}</p>
                                        <div class="post-meta">
                                            <div class="chat"><a href="#"><i class="fa fa-comment"></i><span class="chat-number"> 324</span></a> </div>
                                            <div class="date">{{$event->date_format}}</div>
                                            <div class="comments"><a href="#"><i class="fa fa-share"></i><span class="comments-number"> 324</span></a></div>
                                        </div>
                                        <br>
                                        <!-- <div class="social-link">
                                            <ul>
                                                <li><a class="facebook customer share" href="https://www.facebook.com/sharer.php?u={{$_SERVER['HTTP_HOST']}}/events" title="Facebook share" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter customer share" href="https://twitter.com/share?url=https://codepen.io/patrickkahl&amp;text=Share popup on &amp;hashtags=codepen" title="Twitter share" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="linkedin customer share" href="https://www.linkedin.com/shareArticle?mini=true&url=https://codepen.io/patrickkahl" title="linkedin Share" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div> -->
                                        
                                        <div class="read-more"> <a href="/events/details?id={{$event->id}}&name={{$event->name}}" class="read-more">read more <i class="fa fa-long-arrow-right"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3">
                <div id="right">
                    <div class="sidebar-widget">
                        <a class="twitter-timeline" href="https://twitter.com/james35836?ref_src=twsrc%5Etfw">Tweets by james35836</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection