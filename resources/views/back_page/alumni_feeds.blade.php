@extends('layouts.backend') @section('content')
<!-- Updates Section                                                -->
<section class="updates ">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="daily-feeds card">

                    <div class="card-header">
                        @if(Auth::user()->type > 0)
                        <form method="POST" action="{{ route('posts.store') }}">
                            @csrf
                            <input type="hidden" name="type" value="feed_post" />
                            <div class="input-group">
                                <textarea class="form-control custom-control" name="description" rows="2" style="resize:none"></textarea>
                                <button class="input-group-addon btn btn-primary" onclick="document.forms[0].submit()">POST</button>
                            </div>
                        </div>
                        </form>
                        @else
                        <h1>Feeds</h1>
                            @endif
                    <div class="card-body no-padding">
                        @foreach($_feed as $feed)

                        <div class="item clearfix delete-container">
                            <div class="feed d-flex justify-content-between">
                                <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="{{$feed->user->userinfo->user_profile}}" alt="person" class="img-fluid rounded-circle"></a>
                                    <div class="content">
                                        <h5>Ashley Wood</h5><span>Posted a new Feed </span>
                                        <div class="full-date"><small>{{$feed->date_format}}</small></div>
                                    </div>
                                </div>
                                <div class="date text-right"><small>5min ago</small></div>
                            </div>
                            <div class="quote has-shadow"> <small>{{$feed->description}}</small></div>
                            @if(Auth::user()->access > 1)
                
                            <div class="CTAs pull-right">
                                <button type="button" class="btn-sm btn btn-danger waves-effect delete-button" link="/post/delete/{{$feed->id}}"><i class="fa fa-times"> </i> Delete</button>
                                {{-- <span href="#" class="btn btn-xs btn-danger delete-button" link="/post/delete/{{$feed->id}}"><i class="fa fa-times"> </i>Delete</span> --}}
                            </div>
                            @endif
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection