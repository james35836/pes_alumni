@extends('layouts.backend')
@section('content')
<section class="tables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <div class="card-header d-flex align-items-center">
                        <div class="col-md-6">
                            <h3 class="h4">Photo List</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('albums.create') }}"> Create New Album</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Album Name</th>
                                <th>Album Description</th>
                               
                                <th>Action</th>
                            </tr>
                                </thead>
                                <tbody>
                          
                            @foreach($_data as $key=> $data)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td><img  style="height:40px;" src="{{$data->name}}" alt="" /></td>
                                <td>{{$data->album->name}}</td>
                                <td>{{$data->album->description}}</td>
                                
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('albums.edit',$data->id) }}">Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['albums.destroy', $data->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger','disabled'=>'true']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                                </tbody>
                            </table>
                            {!! $_data->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection




{{-- @extends('layouts.backend')
@section('content')

<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Photo List</h4>
                    <div class="add-product">
                        <a href="/manage/album/add" target="">Add Albums</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Album Name</th>
                                <th>Album Description</th>
                               
                                <th>Action</th>
                            </tr>
                            @foreach($_data as $key=> $data)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td><img src="{{$data->name}}" alt="" /></td>
                                <td>{{$data->album->name}}</td>
                                <td>{{$data->album->description}}</td>
                                
                                <td>
                                    <a class="black-color" href="/manage/album/edit?id={{ $data->album->id }}&name={{ $data->album->name }}"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </table>
                    </div>
                    <div class="custom-pagination">
                        {{$_data->links('pagination.paginate')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}