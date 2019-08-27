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
                            <h3 class="h4">Codes List</h3>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                <th>No</th>
                                <th>Code</th>
                                <th>Owner</th>
                                <th></th>
                            </tr>
                                </thead>
                                <tbody>
                                    @foreach($_data as $key=> $pin)
                            <tr>
                                <td>{{$pin->id}}</td>
                                
                                <td id="{{$pin->code}}">{{$pin->code}}</td>
                                <td>{{$pin->user ? $pin->user->email : "Not in use"}}</td>
                                <td><button {{$pin->user ? "disabled" : ""}} type="button" class="copy-text-table btn btn-primary" data-id="{{$pin->code}}">Copy Code</button></td>
                                
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
                    <h4>User List</h4>
                    <div class="add-product">
                        <a href="/manage/user/add" target="_blank" >Add Officer</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>*
                                <th>No</th>
                                <th>Code</th>
                                <th>Owner</th>
                                <th></th>
                            </tr>
                            @foreach($_data as $key=> $pin)
                            <tr>
                                <td>{{$pin->id}}</td>
                                
                                <td id="{{$pin->code}}">{{$pin->code}}</td>
                                <td>{{$pin->user ? $pin->user->email : "Not in use"}}</td>
                                <td><button {{$pin->user ? "disabled" : ""}} type="button" class="copy-text-table btn btn-primary" data-id="{{$pin->code}}">Copy Code</button></td>
                                
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

