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
                            <h3 class="h4">Products List</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('products.create') }}"> Create New Product</a>
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
                                <th>Name</th>
                                <th>Sizes</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                                </thead>
                                <tbody>
                                    @foreach($_data as $key=> $data)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td><img style="height:50px;" src="{{$data->thumbnail}}" alt="" /></td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->sizes}}</td>
                                <td>{{$data->price}}</td>
                                
                                <td>{{$data->description}}</td>
                                <td>{{$data->date_format}}</td>
                                
                                <td>
                                            <a class="btn btn-sm btn-primary" href="{{ route('products.edit',$data->id) }}">Edit</a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['products.destroy', $data->id],'style'=>'display:inline']) !!}
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


{{-- 



@extends('layouts.backend')
@section('content')

<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Product List</h4>
                    <div class="add-product">
                        <a href="/manage/post/add" target="_blank">Add Product</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Sizes</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            @foreach($_data as $key=> $data)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td><img src="{{$data->thumbnail}}" alt="" /></td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->sizes}}</td>
                                <td>{{$data->price}}</td>
                                
                                <td>{{$data->description}}</td>
                                <td>{{$data->date_format}}</td>
                                
                                <td>
                                    <a class="black-color" href="/manage/post/edit?id={{ $data->id }}&name={{ $data->name }}"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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