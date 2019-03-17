@extends('layouts.front')
@section('content')
<link href="{{ asset('css/stories.css') }}" rel="stylesheet">
<section id="contact">
    <div class="container">
        <h3 class="h3">Latest Stories </h3>
        <div class="row">
            @foreach($_stories as $stories)
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top img-responsive"  src="{{$stories->thumbnail}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title border-bottom pb-3">{{$stories->title}} <a href="#" class="float-right d-inline-flex share"><i class="fa fa-share-alt text-primary"></i></a></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="float-right btn btn-outline-info btn-sm">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        
    </div>
    
</section>
@endsection