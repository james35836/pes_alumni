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
                            <h3 class="h4">Users List</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('users.create') }}"> Create New User</a>
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
                                        <th>Name of User</th>
                                        <th>Status</th>
                                        <th>Batch</th>
                                        <th>Access</th>
                                        <th>Registered</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($_users as $key => $user)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td><a href="{{$user->userinfo->user_profile}}" target="_blank"><img style="height:40px;" src="{{$user->userinfo->user_profile}}" alt="" /></a></td>
                                        <td>{{$user->userinfo->name}}</td>
                                        <td>{{$user->user_status}}</td>
                                        <td>{{$user->group->name}}</td>
                                        <td>{{$user->access_level}}</td>
                                        <td>{{$user->user_registered}}</td>
                                        
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger','disabled'=>'true']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $_users->links() !!}
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
                @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                   @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                   @endforeach
                                </ul>
                            </div>
                        @endif

                        
                    
                <div class="product-status-wrap">
                    <h4>User List</h4>
                    <div class="add-product">
                        <a href="/manage/user/add" target="_blank" >Add Officer</a>
                    </div>

                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Name of User</th>
                                <th>Status</th>
                                <th>Batch</th>
                                <th>Access</th>
                                <th>Registered</th>
                                <th>Setting</th>
                            </tr>
                            @foreach($_users as $key=> $user)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td><img src="{{$user->userinfo->user_profile}}" alt="" /></td>
                                <td>{{$user->userinfo->name}}</td>
                                <td>{{$user->user_status}}</td>
                                <td>{{$user->group->name}}</td>
                                <td>{{$user->access_level}}</td>
                                <td>{{$user->user_registered}}</td>
                                <td>
                                    <a class="black-color" href="/manage/user/edit?id={{ $user->id }}&name={{ $user->userinfo->name }}"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            @endforeach
                            
                        </table>
                    </div>
                    <div class="custom-pagination">
                        {{$_users->links('pagination.paginate')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}