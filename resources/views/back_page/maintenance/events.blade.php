@extends('layouts.backend')
@section('content')

<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Events List</h4>
                    <div class="add-product">
                        <a href="/manage/post/add" target="_blank">Add Events</a>
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
                            @foreach($_events as $key=> $event)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td><img src="{{$event->thumbnail}}" alt="" /></td>
                                <td>{{$event->name}}</td>
                                <td>
                                    <button class="pd-setting">Active</button>
                                </td>
                                <td>{{$event->description}}</td>
                                <td>{{$event->date}}</td>
                                <td>{{$event->time}}</td>
                                
                                <td>
                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            @endforeach
                            
                        </table>
                    </div>
                    <div class="custom-pagination">
                        {{$_events->links('pagination.paginate')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection