@extends('layouts.backend')
@section('content')
<div id="PrimaryModalhdbgcl" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
                <h4 class="modal-title">Add Officers</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="/manage/officer" class="needsclick addcourse" id="demo1-upload" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <select class="form-control" name="position">
                                        <option value="">Select Position</option>
                                        <option>Vice President</option>
                                        <option>President</option>
                                        <option>President</option>
                                        <option>President</option>
                                        <option>President</option>
                                        <option>President</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input name="thumbnail" class="form-control" type="file" placeholder="Thumbnail" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="fb_link" class="form-control" placeholder="FB Link" />
                                </div>
                                
                                
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                    <input type="text" name="twitter_link" class="form-control" placeholder="Twitter Link" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="linkedin_link" class="form-control" placeholder="Linkedin Link" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control"  rows="5" name="description" placeholder="Biography"></textarea>
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
                    <h4>Officers List</h4>
                    <div class="add-product">
                        <a href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl">Add Officer</a>
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
                                <th>Setting</th>
                            </tr>
                            @foreach($_officer as $key=> $officer)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td><img src="{{$officer->thumbnail}}" alt="" /></td>
                                <td>{{$officer->name}}</td>
                                <td>
                                    <button class="pd-setting">{{$officer->archived_status}}</button>
                                </td>
                                <td>{{$officer->description}}</td>
                                <td>{{$officer->created_at}}</td>
                                
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

