@extends('layouts.backend')
@section('content')
<div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    @foreach($_list as $list)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 p-30">
                        <div class="student-inner-std res-mg-b-30">
                            <div class="student-img">
                                <img src="{{$list->userinfo->user_profile}}" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>{{$list->userinfo->name}}</h2>
                                <p class="dp">ADVISER</p>
                                <p class="dp-ag"><b>SY : {{$list->group->name}}</b></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
@endsection