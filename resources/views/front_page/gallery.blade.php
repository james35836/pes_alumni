@extends('layouts.frontend')
@section('content')
<div id="blog-page-contain">
    <div class="container">
        <div class="row">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="gallery-title">Gallery</h1>
            </div>
            <div align="center">
                <button class="btn filter-button" data-filter="all">All</button>
                @foreach($_data as $album)
                    <button class="btn filter-button" data-filter="album_id_{{$album->id}}">{{$album->name}}</button>
                @endforeach
            </div>
            @foreach($_data as $album)
                @foreach($album->photo as $photo)
                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter album_id_{{$photo->album_id}}">
                        <img src="{{$photo->name}}" class="img-responsive">
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>

@endsection