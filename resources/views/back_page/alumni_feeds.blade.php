@extends('layouts.backend')
@section('content')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="profile-info-inner" id="reviews">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <form class="feed-create" method="POST" action= "/alumni/feeds">
                                    @csrf
                                    <div class="card-header">
                                        Create Post
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <textarea class="form-control" name="content" id="content" rows="3" placeholder="What are you thinking?"></textarea>
                                        </div>
                                    </div>
                                    <div class="btn-toolbar justify-content-between">
                                        <div class="btn-group">
                                            <button type="submit" class="btn btn-sm btn-primary button-custom">share</button>
                                        </div>
                                        <div class="btn-group">
                                            <button id="btnGroupDrop1" type="submit" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-globe"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1" style="padding: 10px;color: #3e3e46;"> 
                                                <ul class="list-inline dropdown-item">
                                                    <li class="list-inline-item">
                                                        <input type='radio' class="selected_viewer d-none" value='1' name='group_id'  checked />
                                                        <label for="selected_viewes" class="label selected_views"><i class="fa fa-globe"></i> To Public</label>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <input type='radio' class="selected_viewer d-none" value='{{Auth::user()->group_id}}' name='group_id'   />
                                                        <label for="selected_viewes" class="label selected_views"><i class="fa fa-users"></i> To Group</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="chat-discussion" style="height: auto">
                                    @foreach($_feed as $feed)
                                    <div class="chat-message">
                                        <div class="profile-hdtc">
                                            <img class="message-avatar" src="{{$feed->user->userinfo->user_profile}}" alt="">
                                        </div>
                                        <div class="message">
                                            <a class="message-author" href="#"> {{$feed->user->userinfo->name}} </a>
                                            <span class="message-date"> {{$feed->date_format}} </span>
                                            <span class="message-content">{{$feed->content}}</span>
                                            <div class="m-t-md mg-t-10">
                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                <a class="btn btn-xs btn-success"><i class="fa fa-heart"></i> Love</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="chat-message">
                                        <div class="profile-hdtc">
                                            <img class="message-avatar" src="/backend/img/contact/2.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <a class="message-author" href="#"> Karl Jordan </a>
                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                            <span class="message-content">
                                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover.
                                            </span>
                                            <div class="m-t-md mg-t-10">
                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i> Love</a>
                                                <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-message">
                                        <div class="profile-hdtc">
                                            <img class="message-avatar" src="/backend/img/contact/3.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <a class="message-author" href="#"> Michael Smith </a>
                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                            <span class="message-content">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="chat-message">
                                        <div class="profile-hdtc">
                                            <img class="message-avatar" src="/backend/img/contact/4.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <a class="message-author" href="#"> Alice Jordan </a>
                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                            <span class="message-content">
                                                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                                                It uses a dictionary of over 200 Latin words.
                                            </span>
                                            <div class="m-t-md mg-t-10">
                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                <a class="btn btn-xs btn-warning"><i class="fa fa-eye"></i> Nudge</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-message">
                                        <div class="profile-hdtc">
                                            <img class="message-avatar" src="/backend/img/contact/1.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <a class="message-author" href="#"> Mark Smith </a>
                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                            <span class="message-content">
                                                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                                                It uses a dictionary of over 200 Latin words.
                                            </span>
                                            <div class="m-t-md mg-t-10">
                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                <a class="btn btn-xs btn-success"><i class="fa fa-heart"></i> Love</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-message">
                                        <div class="profile-hdtc">
                                            <img class="message-avatar" src="/backend/img/contact/2.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <a class="message-author" href="#"> Karl Jordan </a>
                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                            <span class="message-content">
                                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover.
                                            </span>
                                            <div class="m-t-md mg-t-10">
                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i> Love</a>
                                                <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-message">
                                        <div class="profile-hdtc">
                                            <img class="message-avatar" src="/backend/img/contact/3.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <a class="message-author" href="#"> Michael Smith </a>
                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                            <span class="message-content">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="chat-message">
                                        <div class="profile-hdtc">
                                            <img class="message-avatar" src="/backend/img/contact/4.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <a class="message-author" href="#"> Alice Jordan </a>
                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                            <span class="message-content">
                                                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                                                It uses a dictionary of over 200 Latin words.
                                            </span>
                                            <div class="m-t-md mg-t-10">
                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i> Love</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a class="twitter-timeline" href="https://twitter.com/james35836?ref_src=twsrc%5Etfw">Tweets by james35836</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
</div>
@endsection