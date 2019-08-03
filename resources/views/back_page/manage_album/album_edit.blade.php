@extends('layouts.backend')
@section('content')

<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Edit Album</h4>
                    <form method="POST" action= "/manage/album/edit_submit" enctype="multipart/form-data">
                        <input name="id" type="hidden" value= "{{$data->id}}">

                        @csrf
                        <div class="row">
                                @if(session('success'))

                                <div class="alert alert-success">

                                    {{ session('success') }}

                                </div> 

                                @endif

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Album Name"  value= "{{$data->name}}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="file" name="images[]" class="form-control" multiple>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <div class="form-group">
                                    <textarea name="description" class="form-control" placeholder="Album description(optional)">{{$data->description}}</textarea>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="payment-adress">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($data->photo as $list)
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 p-30 delete-container" style="height:370px;">
                <div class="student-inner-std res-mg-b-30">
                    <div class="student-img">
                        <img src="{{$list->name}}" alt="" />
                    </div>
                    <div class="student-dtl">
                        <button type="button" class="btn btn-danger waves-effect delete-button" link="/photo/delete/{{$list->id}}">Delete</button>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>



@endsection