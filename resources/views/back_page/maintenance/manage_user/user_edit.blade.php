@extends('layouts.backend')
@section('content')

<div class="product-status mg-b-15">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-status-wrap">
                <h4>Edit User</h4>
                <form class="form-submit update" method="POST" action= "/manage/user/edit_submit">
                    @csrf
                    <input name="id" value="{{ $data->id }}" type="hidden">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input name="last_name" value="{{ $data->last_name }}" type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input name="first_name" value="{{ $data->first_name }}" type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input name="middle_name" value="{{ $data->middle_name }}" type="text" class="form-control" placeholder="Middle Name">
                            </div>
                            <div class="form-group">
                                <select name="gender" class="form-control">
                                    <option {{ $data->gender == "Male" ? "selected" : "" }}>Male</option>
                                    <option {{ $data->gender == "Female" ? "selected" : "" }}>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input name="email" value="{{ $data->email }}" type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input name="contact" value="{{ $data->contact }}" type="text" class="form-control" placeholder="Phone Number">
                            </div>
                            

                            <div class="form-group">
                                <select name="type" class="form-control">
                                    <option value="0" {{ $data->gender == 0 ? "selected" : "" }}>Select User Type</option>
                                    <option value="0" {{ $data->gender == 0 ? "selected" : "" }}>Member</option>
                                    <option value="1" {{ $data->gender == 1 ? "selected" : "" }}>Officer</option>
                                    <option value="2" {{ $data->gender == 2 ? "selected" : "" }}>Editor</option>
                                    <option value="3" {{ $data->gender == 3 ? "selected" : "" }}>Moderator</option>
                                    <option value="4" {{ $data->gender == 4 ? "selected" : "" }}>Admin</option>
                                    <option value="5" {{ $data->gender == 5 ? "selected" : "" }}>Super Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="type" class="form-control">
                                    <option value="member" {{ $data->type == "member" ? "selected" : "" }}>Select Position</option>
                                    <option {{ $data->type == "President" ? "selected" : "" }}>President</option>
                                    <option {{ $data->type == "Vice-President" ? "selected" : "" }}>Vice-President</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <textarea name="biography" class="form-control" row="5" placeholder="Create a simple bio for this user.">{!! $data->biography !!}</textarea>
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