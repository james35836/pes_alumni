@extends('layouts.backend')
@section('content')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Officers List</h4>
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
                                <td><button class="pd-setting">{{$user->user_status}}</button></td>
                                <td><button class="pd-setting">{{$user->group->name}}</button></td>
                                <td><button class="pd-setting">{{$user->access}}</button></td>
                                



                                
                                <td>{{$user->user_registered}}</td>
                                <td>
                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
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
@endsection