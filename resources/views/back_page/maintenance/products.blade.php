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
                                <th>Status</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Setting</th>
                            </tr>
                            @foreach($_data as $key=> $data)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td><img src="{{$data->thumbnail}}" alt="" /></td>
                                <td>{{$data->name}}</td>
                                <td>
                                    <button class="pd-setting">Active</button>
                                </td>
                                <td>{{$data->description}}</td>
                                <td>{{$data->date}}</td>
                                <td>{{$data->time}}</td>
                                
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
@endsection