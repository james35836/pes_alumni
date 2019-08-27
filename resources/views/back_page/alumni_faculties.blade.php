

@extends('layouts.backend')
@section('content')
<section class="forms">
   <div class="container-fluid">
      <div class="row">
         @foreach($_list as $list)
   
         <div class="col-lg-3">
            <div class="client card">
               <div class="card-body text-center">
                  <div class="client-avatar">
                     <img style="max-height:100px;" src="{{$list->userinfo->user_profile}}" alt="..." class="img-fluid rounded-circle">
                     <div class="status bg-green"></div>
                  </div>
                  <div class="client-title">
                     <h3 class="limit_one_line">{{$list->userinfo->name}}</h3>
                     <span>{{$list->userinfo->work_position ?: "Adviser"}}</span><a href="/profile?id={{ $list->id }}">View Profile</a>
                  </div>
                  <div class="client-info">
                     <div class="text-center" style="height:70px;">
                        <p> {{$list->userinfo->biography ?: "Nothing to show"}}</p>
                     </div>
                  </div>
                  <div class="client-social d-flex justify-content-between">
                    <a href="{{$list->userinfo->fb_link}}" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="{{$list->userinfo->twitter_link}}" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="{{$list->userinfo->linkedin_link}}" target="_blank"><i class="fa fa-linkedin"></i></a></div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>

@endsection