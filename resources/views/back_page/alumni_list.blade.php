@extends('layouts.backend')
@section('content')
<section class="forms">
   <div class="container-fluid">
      <div class="row">
         <!-- Work Amount  -->
         @foreach($_list as $list)
         {{--             
         <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mt-1">
            <div class="hpanel hblue contact-panel contact-panel-cs mg-b-10 responsive-mg-b-30 dk-res-t-pro-30 ">
               <div class="panel-body custom-panel-jw">
                  <div class="social-media-in">
                     <a target="_blank" href="{{$list->userinfo->fb_link}}"><i class="fa fa-facebook"></i></a>
                     <a target="_blank" href="{{$list->userinfo->twitter_link}}"><i class="fa fa-twitter"></i></a>
                     <a target="_blank" href="{{$list->userinfo->linkedin_link}}"><i class="fa fa-linkedin"></i></a>
                     <a target="_blank" href="/alumni-profile?view=alumni-account&user={{$list->id}}"><i class="fa fa-eye"></i></a>
                  </div>
                  <img alt="logo" class="img-circle m-b" style="max-height: 80px;" src="{{$list->userinfo->user_profile}}">
                  <h3><a class="one_line" href="/alumni-profile?view=alumni-account&user={{$list->id}}">{{$list->userinfo->name}}</a></h3>
                  <p class="all-pro-ad">{{$list->userinfo->work_position ?: "Graduate"}}</p>
                  <p class="bio-container-list" style="height:70px;">
                     {{$list->userinfo->biography ?: "Nothing to show"}}
                  </p>
               </div>
               <div class="panel-footer contact-footer">
                  <div class="professor-stds-int">
                     <div class="professor-stds" style="width:100%">
                        <div class="contact-stat " style="width:100%"><span>Batch</span> <br><strong>{{$list->group->name}}</strong></div>
                     </div>
                  </div>
                  <div class="professor-stds-int">
                     <div class="professor-stds" style="width:100%">
                        <div class="contact-stat" style="width:100%"><span>Join</span> <br><strong>{{$list->user_registered}}</strong></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         --}}
         <!-- Client Profile -->
         <div class="col-lg-3">
            <div class="client card">
               <div class="card-close">
                  <div class="dropdown">
                     <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                     <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                  </div>
               </div>
               <div class="card-body text-center">
                  <div class="client-avatar">
                     <img style="max-height:100px;" src="{{$list->userinfo->user_profile}}" alt="..." class="img-fluid rounded-circle">
                     <div class="status bg-green"></div>
                  </div>
                  <div class="client-title">
                     <h3 class="limit_one_line">{{$list->userinfo->name}}</h3>
                     <span>{{$list->userinfo->work_position ?: "Graduate"}}</span><a href="/profile?id={{ $list->id }}">View Profile</a>
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
{{-- <div class="contacts-area mg-b-15">
   <div class="container-fluid">
      <div class="row">
         @foreach($_list as $list)
         <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mt-1">
            <div class="hpanel hblue contact-panel contact-panel-cs mg-b-10 responsive-mg-b-30 dk-res-t-pro-30 ">
               <div class="panel-body custom-panel-jw">
                  <div class="social-media-in">
                     <a target="_blank" href="{{$list->userinfo->fb_link}}"><i class="fa fa-facebook"></i></a>
                     <a target="_blank" href="{{$list->userinfo->twitter_link}}"><i class="fa fa-twitter"></i></a>
                     <a target="_blank" href="{{$list->userinfo->linkedin_link}}"><i class="fa fa-linkedin"></i></a>
                     <a target="_blank" href="/alumni-profile?view=alumni-account&user={{$list->id}}"><i class="fa fa-eye"></i></a>
                  </div>
                  <img alt="logo" class="img-circle m-b" style="max-height: 80px;" src="{{$list->userinfo->user_profile}}">
                  <h3><a class="one_line" href="/alumni-profile?view=alumni-account&user={{$list->id}}">{{$list->userinfo->name}}</a></h3>
                  <p class="all-pro-ad">{{$list->userinfo->work_position ?: "Graduate"}}</p>
                  <p class="bio-container-list" style="height:70px;">
                     {{$list->userinfo->biography ?: "Nothing to show"}}
                  </p>
               </div>
               <div class="panel-footer contact-footer">
                  <div class="professor-stds-int">
                     <div class="professor-stds" style="width:100%">
                        <div class="contact-stat " style="width:100%"><span>Batch</span> <br><strong>{{$list->group->name}}</strong></div>
                     </div>
                  </div>
                  <div class="professor-stds-int">
                     <div class="professor-stds" style="width:100%">
                        <div class="contact-stat" style="width:100%"><span>Join</span> <br><strong>{{$list->user_registered}}</strong></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
      <div class="row">
         <div class="pagination-bar">
            {{$_list->links('pagination.pagination')}}
         </div>
      </div>
   </div>
</div> --}}
@endsection