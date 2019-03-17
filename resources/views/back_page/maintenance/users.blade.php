@extends('layouts.backend')
@section('content')
<div id="PrimaryModalhdbgcl" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
                <h4 class="modal-title">Manage User</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="modal-body">
                
                <div class="container-fluid">
                    
                    
                    
                    
                    <form method="POST" action="/upload" class="needsclick addcourse" id="demo1-upload" action="/event" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Event Name">
                                </div>
                                <div class="form-group">
                                    <input name="date" type="text" class="form-control hasDatepicker" placeholder="Event Date">
                                </div>
                                <div class="form-group">
                                    <input name="time" type="text" class="form-control" placeholder="Event Time">
                                </div>
                                <div class="form-group">
                                    <input name="place" type="number" class="form-control" placeholder="Event Place">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" placeholder="Your Batch">
                                        <option>Select Group</option>
                                        <option>1</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input name="thumbnail" class="form-control" type="file" placeholder="Thumbnail" />
                                </div>
                                <div class="form-group">
                                    <textarea name="description" rows="5" placeholder="Description"></textarea>
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
            <div class="modal-footer">
                <a data-dismiss="modal" href="#">Cancel</a>
                <a href="#">Process</a>
            </div>
        </div>
    </div>
</div>
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>User List</h4>
                    <div class="add-product">
                        <a href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl">Add Users</a>
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
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection