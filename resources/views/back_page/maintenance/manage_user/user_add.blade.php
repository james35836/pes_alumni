@extends('layouts.backend')
@section('content')

<div class="product-status mg-b-15">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-status-wrap">
                <h4>Add User</h4>
                <form class="form-submit" method="POST" action= "/manage/user/add_submit">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input name="last_name" type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input name="first_name" type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input name="middle_name" type="text" class="form-control" placeholder="Middle Name">
                            </div>
                            <div class="form-group">
                                <select name="gender" class="form-control">
                                    <option >Male</option>
                                    <option >Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input name="email" type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input name="contact" type="text" class="form-control" placeholder="Phone Number">
                            </div>
                            

                            <div class="form-group">
                                <select name="type" class="form-control">
                                    <option value="0">Select User Type</option>
                                    <option value="0">Member</option>
                                    <option value="1">Officer</option>
                                    <option value="2">Editor</option>
                                    <option value="3">Moderator</option>
                                    <option value="4">Admin</option>
                                    <option value="5">Super Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="type" class="form-control">
                                    <option value="member">Select Position</option>
                                    <option>President</option>
                                    <option>Vice-President</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <textarea name="biography" class="form-control" row="5" placeholder="Create a simple bio for this user."></textarea>
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