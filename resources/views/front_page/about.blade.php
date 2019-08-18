@extends('layouts.frontend')
@section("content")
<div id="about-page-contain">
    <div class="container">

        <div class="row">
            <div class="wwd">
                <div class="col-md-12">
                    <h2 class="tf">Paloc Alumni Association</h2>
                </div>
                <div class="col-md-6">
                    <p>make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing</p>
                </div>
                <div class="col-md-6">
                    <p>make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="skill">
                <div class="col-md-4">
                    <h2 class="tf">Profession</h2>
                    <ul>
                        @foreach($_work_detail as $key=>$detail)
                        <li> <span>{{$key+50}}%</span>
                            <div id="progress{{$key+1}}" number="{{$key+50}}">
                                <h5>{{$detail->work}}</h5>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="Experiences">
                <div class="col-md-4">
                    <h2 class="tf">Alumni Pledge</h2>
                    <div class="exp-detail">
                        <h5>PLEDGE OF LOYALTY</h5>
                        <p>make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                    </div>
                </div>
            </div>
            <div class="work">
                <div class="col-md-4">
                    <h2 class="tf">Work</h2>
                    <ul>
                        <li><span>1</span>
                            <h5>Mission</h5>
                            <p>The release of Letraset make a type specimen book</p>
                        </li>
                        <li><span>2</span>
                            <h5>Vision</h5>
                            <p> Lorem Ipsum passages, and more</p>
                        </li>
                        <li><span>3</span>
                            <h5>Goals </h5>
                            <p>Essentially unchanged.desktop publishing </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 team">
                <h2 class="tf">Our Officers </h2>
            </div>
        </div>
        <div class="row team">
            @foreach($_officer as $key=> $officer)
            <div class="col-md-3 col-sm-3 team1 ">
                <div class="photo">
                    <div class="imageblock"> <img class="img-responsive" src="{{$officer->userinfo->user_profile}}" alt="#">
                        <div class="hoverblock"> </div>
                        <div class="team-social"> 
                            <a target="_blank" href="{{$officer->userinfo->fb_link}}"><i class="fa fa-facebook"></i></a> 
                            <a target="_blank" href="{{$officer->userinfo->twitter_link}}"><i class="fa fa-twitter"></i></a> 
                            <a target="_blank" href="{{$officer->userinfo->linkedin_link}}"><i class="fa fa-linkedin"></i></a> 
                        </div>
                        <div class="name"> <a href="#">{{$officer->userinfo->name}} </a> </div>
                    </div>
                    <h5>{{$officer->position}}</h5>
                    <p style="height: 90px;overflow: hidden;">{{$officer->userinfo->biography}}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<script type="text/javascript">
    $( "#progress1" ).appendSimpleProgressBar();
    var num1 = $( "#progress1" ).attr( 'number');
    $( "#progress1" ).slow( { width:num1 } );

    $( "#progress2" ).appendSimpleProgressBar();
    $( "#progress2" ).slow( { width:"92" } );

    $( "#progress3" ).appendSimpleProgressBar();
    $( "#progress3" ).slow( { width:"76" } );

    $( "#progress4" ).appendSimpleProgressBar();
    $( "#progress4" ).slow( { width:"98" } );
</script>
@endsection
