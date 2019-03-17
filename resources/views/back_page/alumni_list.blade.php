@extends('layouts.backend')
@section('content')
<div class="contacts-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            @foreach($_list as $list)
            
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mt-1">
                <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30 dk-res-t-pro-30 mg-t-30">
                    <div class="panel-body custom-panel-jw">
                        <div class="social-media-in">
                            <a href="{{$list->userinfo->fb_link}}"><i class="fa fa-facebook"></i></a>
                            <a href="{{$list->userinfo->twitter_link}}"><i class="fa fa-twitter"></i></a>
                            <a href="{{$list->userinfo->linkedin_link}}"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <img alt="logo" class="img-circle m-b" src="{{$list->userinfo->profile ? $list->userinfo->profile : '/backend/img/contact/1.jpg'}}">
                        <h3><a href="">{{$list->userinfo->name}}</a></h3>
                        <p class="all-pro-ad">{{$list->userinfo->name}}</p>
                        <p>
                            Lorem ipsum dolor sit amet of, consectetur adipiscing elitable. Vestibulum tincidunt est vitae ultrices accumsan.
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="professor-stds-int">
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Likes: </span> <strong>956</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Comments: </span> <strong>350</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Views: </span> <strong>450</strong></div>
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