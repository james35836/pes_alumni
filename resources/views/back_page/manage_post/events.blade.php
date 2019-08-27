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
                            <h3 class="h4">Event List</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('posts.create') }}"> Create New Event</a>
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
                                <th>Venue</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Setting</th>
                            </tr>
                                </thead>
                                <tbody>
                                    @foreach($_events as $key=> $event)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td><img style="height:50px;" src="{{$event->thumbnail}}" alt="" /></td>
                                <td>{{$event->name}}</td>
                                <td>{{$event->place}}</td>
                                <td>{{$event->description}}</td>
                                <td>{{$event->date_format}}</td>
                                <td>{{$event->time}}</td>
                                
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('posts.edit',$event->id) }}">Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $event->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger','disabled'=>'true']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                                </tbody>
                            </table>
                            {!! $_events->links() !!}
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
                                <th>Venue</th>
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
                                <td>{{$event->place}}</td>
                                <td>{{$event->description}}</td>
                                <td>{{$event->date_format}}</td>
                                <td>{{$event->time}}</td>
                                
                                <td>
                                    <a class="black-color" href="/manage/post/edit?id={{ $event->id }}&name={{ $event->name }}"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
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
@endsection --}}