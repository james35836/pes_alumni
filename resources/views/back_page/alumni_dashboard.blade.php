@extends('layouts.backend')


@section('content')
<!-- Dashboard Counts Section-->
<section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
      <div class="row bg-white has-shadow">
        <!-- Item -->
        <div class="col-xl-3 col-sm-6">
          <div class="item d-flex align-items-center">
            <div class="icon bg-violet"><i class="icon-user"></i></div>
            <div class="title"><span>All<br>Users</span>
              <div class="progress">
                <div role="progressbar" style="width:{{$user_percent}}%; height: 4px;"  aria-valuenow="{{$user_percent}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
            </div>
        </div>
        <div class="number"><strong>{{$user_count}}</strong></div>
    </div>
</div>
<!-- Item -->
<div class="col-xl-3 col-sm-6">
  <div class="item d-flex align-items-center">
    <div class="icon bg-red"><i class="icon-padnote"></i></div>
    <div class="title"><span>Alumni<br>Admin</span>
      <div class="progress">
        <div role="progressbar" style="width: {{ $admin_percent }}%; height: 4px;" aria-valuenow="{{ $admin_percent }}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
    </div>
</div>
<div class="number"><strong>{{ $admin_count }}</strong></div>
</div>
</div>
<!-- Item -->
<div class="col-xl-3 col-sm-6">
  <div class="item d-flex align-items-center">
    <div class="icon bg-green"><i class="icon-bill"></i></div>
    <div class="title"><span>Alumni<br>Member</span>
      <div class="progress">
        <div role="progressbar" style="width: {{ $member_percent }}%; height: 4px;" aria-valuenow="{{ $member_percent }}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
    </div>
</div>
<div class="number"><strong>{{ $member_count }}</strong></div>
</div>
</div>
<!-- Item -->
<div class="col-xl-3 col-sm-6">
  <div class="item d-flex align-items-center">
    <div class="icon bg-orange"><i class="icon-check"></i></div>
    <div class="title"><span>Member<br>Inactive</span>
      <div class="progress">
        <div role="progressbar" style="width: {{ $inactive_percent }}%; height: 4px;" aria-valuenow="{{ $inactive_percent }}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
    </div>
</div>
<div class="number"><strong>{{ $inactive_count }}</strong></div>
</div>
</div>
</div>
</div>
</section>

<section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
      <div class="row bg-white has-shadow">
        <!-- Item -->
        <div class="col-xl-3 col-sm-6">
          <div class="item d-flex align-items-center">
            <div class="icon bg-violet"><i class="icon-user"></i></div>
            <div class="title"><span>Published<br>Stories</span>
             
        </div>
        <div class="number"><strong>{{$story_count}}</strong></div>
    </div>
</div>
<!-- Item -->
<div class="col-xl-3 col-sm-6">
  <div class="item d-flex align-items-center">
    <div class="icon bg-red"><i class="icon-padnote"></i></div>
    <div class="title"><span>Published<br>Events</span>
 
</div>
<div class="number"><strong>{{ $event_count }}</strong></div>
</div>
</div>
<!-- Item -->
<div class="col-xl-3 col-sm-6">
  <div class="item d-flex align-items-center">
    <div class="icon bg-green"><i class="icon-bill"></i></div>
    <div class="title"><span>Posted<br>Products</span>

</div>
<div class="number"><strong>{{ $product_count }}</strong></div>
</div>
</div>
<!-- Item -->
<div class="col-xl-3 col-sm-6">
  <div class="item d-flex align-items-center">
    <div class="icon bg-orange"><i class="icon-check"></i></div>
    <div class="title"><span>Member<br>Inactive</span>

</div>
<div class="number"><strong>{{ $inactive_count }}</strong></div>
</div>
</div>
</div>
</div>
</section>






@endsection



{{-- @extends('layouts.backend')
@section('content')
<div class="analytics-sparkle-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Alumni Users</h5>
                        <h2><span class="counter">{{$user_count}}</span> <span class="tuition-fees">All user</span></h2>
                        <span class="text-success">{{$user_percent}}%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{$user_percent}}%;"> <span class="sr-only">20% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                         <h5>Alumni Admin</h5>
                        <h2><span class="counter">{{$admin_count}}</span> <span class="tuition-fees">All Admin</span></h2>
                        <span class="text-danger">{{$admin_percent}}%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{$admin_percent}}%;"> <span class="sr-only">230% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Alumni Member</h5>
                        <h2><span class="counter">{{$member_count}}</span> <span class="tuition-fees">All Admin</span></h2>
                        <span class="text-info">{{$member_percent}}%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{$member_percent}}%;"> <span class="sr-only">20% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Alumni Inactive</h5>
                       <h2><span class="counter">{{$inactive_count}}</span> <span class="tuition-fees">All Admin</span></h2>
                        <span class="text-inverse">{{$inactive_percent}}%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{$inactive_percent}}%;"> <span class="sr-only">230% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="traffic-analysis-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu">
                    <i class="fa fa-history"></i>
                    <div class="social-edu-ctn">
                        <h3>{{$story_count}}</h3>
                        <p>Published Stories</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu twitter-cl res-mg-t-30 table-mg-t-pro-n">
                    <i class="fa fa-calendar"></i>
                    <div class="social-edu-ctn">
                        <h3>{{$event_count}}</h3>
                        <p>Published Events</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu linkedin-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <i class="fa fa-product-hunt "></i>
                    <div class="social-edu-ctn">
                        <h3>{{$product_count}}</h3>
                        <p>Published Products</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu youtube-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <i class="fa fa-calendar"></i>
                    <div class="social-edu-ctn">
                        <h3>0 </h3>
                        <p>Upcoming Events</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection --}}