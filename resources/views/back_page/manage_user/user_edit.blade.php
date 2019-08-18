@extends('layouts.backend')
@section('content')

<div class="product-status mg-b-15">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-status-wrap">
                <h4>Edit User</h4>
                <form class="" method="POST" action= "/manage/user/edit_submit">
                    @csrf
                    <input name="id" value="{{ $data->id }}" type="hidden">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input name="last_name" value="{{ $data->userinfo->last_name }}" type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="first_name" value="{{ $data->userinfo->first_name }}" type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input name="middle_name" value="{{ $data->userinfo->middle_name }}" type="text" class="form-control" placeholder="Middle Name">
                            </div>
                            <div class="form-group">
                                <label>User Type</label>
                                <select name="type" class="form-control">
                                    <option {{ $data->type == 0 ? "selected" : "" }} value="0">Member</option>
                                    <option {{ $data->type == 1 ? "selected" : "" }} value="1">Officer</option>
                                    <option {{ $data->type == 2 ? "selected" : "" }} value="2">Faculties</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" value="{{ $data->email }}" type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input name="contact" value="{{ $data->userinfo->contact }}" type="text" class="form-control" placeholder="Phone Number">
                            </div>
                            

                            <div class="form-group">
                                <label>User Access</label>
                                <select name="access" class="form-control">
                                    <option value="0" {{ $data->access == 0 ? "selected" : "" }}>Member</option>
                                    <option value="1" {{ $data->access == 1 ? "selected" : "" }}>Reserve</option>
                                    <option value="2" {{ $data->access == 2 ? "selected" : "" }}>Editor</option>
                                    <option value="3" {{ $data->access == 3 ? "selected" : "" }}>Admin</option>
                                    <option value="4" {{ $data->access == 4 ? "selected" : "" }}>Super Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Position</label>
                                <select name="position" class="form-control"> {{$data->position }}
                                    <option {{ $data->position == "Member" ? "selected" : "" }}>Member</option>
                                    <option {{ $data->position == "President" ? "selected" : "" }}>President</option>
                                    <option {{ $data->position == "Vice-President" ? "selected" : "" }}>Vice-President</option>
                                    <option {{ $data->position == "Secretary" ? "selected" : "" }}>Secretary</option>
                                    <option {{ $data->position == "Treasurer" ? "selected" : "" }}>Treasurer</option>
                                    <option {{ $data->position == "Auditor" ? "selected" : "" }}>Auditor</option>
                                </select>
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
    </div>
</div>
</div>
@endsection