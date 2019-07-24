@extends('layouts.frontend')
@section('content')
<div id="blog-page-contain">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="left">
                    @foreach($_data as $data)
                    <div class="post-item">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="post-image"> <a href="#"><img src="{{$data->thumbnail}}" alt=""></a> </div>
                            </div>
                            <div class="col-md-7">
                                <div class="content-details">
                                    <div class="post-title text-capital">
                                        <h3><a href="/posts/details?date={{$data->date_format}}&id={{$data->id}}&name={{$data->name}}">{{$data->name}}</a></h3>
                                    </div>
                                    <div class="description">
                                        <p>{!!$data->description!!}</p>
                                        <div class="post-meta">
                                            <div class="chat"> <a href="#"> <span class="chat-number">Posted By</span> <span class="chat-number">{{$data->user->userinfo->name}}</span> </a> </div>
                                            <div class="chat"> <a href="#"> <span class="chat-number">Posted on</span> <span class="chat-number">{{$data->date_format}}</span> </a> </div>
                                        </div>
                                        <br>
                                        <div class="social-link">
                                            <ul>
                                                <li><a class="facebook customer share" href="https://www.facebook.com/sharer.php?u={{$_SERVER['HTTP_HOST']}}//posts/details?id={{$data->id}}&name={{$data->name}}" title="Facebook share" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter customer share" href="https://twitter.com/share?url={{$_SERVER['HTTP_HOST']}}//posts/details?id={{$data->id}}&name={{$data->name}}" title="Twitter share" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="linkedin customer share" href="https://www.linkedin.com/shareArticle?mini=true&url={{$_SERVER['HTTP_HOST']}}//posts/details?id={{$data->id}}&name={{$data->name}}" title="linkedin Share" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        
                                        <div class="read-more"> <a href="/posts/details?id={{$data->id}}&name={{$data->name}}" class="read-more">read more <i class="fa fa-long-arrow-right"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="pagination-bar">
                        {{$_data->links('pagination.pagination')}}
                    </div>
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