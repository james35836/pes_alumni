@extends('layouts.backend')
@section('content')
<div class="contacts-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            @foreach($_list as $list)
            
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mt-1">
                <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30 dk-res-t-pro-30 ">
                    <div class="panel-body custom-panel-jw">
                        <div class="social-media-in">
                            <a target="_blank" href="{{$list->userinfo->fb_link}}"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="{{$list->userinfo->twitter_link}}"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="{{$list->userinfo->linkedin_link}}"><i class="fa fa-pinterest"></i></a>
                            <a target="_blank" href="/alumni-profile?view=alumni-account&user={{$list->id}}"><i class="fa fa-eye"></i></a>
                        </div>
                        <img alt="logo" class="img-circle m-b" style="max-height: 80px;" src="{{$list->userinfo->user_profile}}">
                        <h3><a href="/alumni-profile?view=alumni-account&user={{$list->id}}">{{$list->userinfo->name}}</a></h3>
                        <p class="all-pro-ad">{{$list->userinfo->work_position ?: "Graduate"}}</p>
                        <p>
                            {{$list->userinfo->biography ?: "Nothing to show"}}
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="professor-stds-int">
                            <div class="professor-stds" style="width:50%">
                                <div class="contact-stat" style="width:100%"><span>Batch</span> <br><strong>{{$list->group->name}}</strong></div>
                            </div>
                            <div class="professor-stds" style="width:50%">
                                <div class="contact-stat" style="width:100%"><span>Join</span> <br><strong>{{$list->user_registered}}</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection