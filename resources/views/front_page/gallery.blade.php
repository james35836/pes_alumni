@extends('layouts.frontend')
@section('content')
<div id="blog-page-contain">
    <div class="container">
        <div class="row">
            <div align="center">
                <button class="btn filter-button" data-filter="all">All</button>
                @foreach($_data as $album)
                    <button class="btn filter-button" data-filter="album_id_{{$album->id}}">{{$album->name}}</button>
                @endforeach
            </div>
            @foreach($_data as $album)
                @foreach($album->photo as $photo)
                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter album_id_{{$photo->album_id}}">
                        <a href="{{$photo->name}}">
                            <img style="height:230px;max-width:290px;" src="{{$photo->name}}" class="img-responsive">
                        </a>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>

@endsection