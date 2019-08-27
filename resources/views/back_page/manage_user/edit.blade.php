@extends('layouts.backend')


@section('content')

<!-- Forms Section-->
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            
            <!-- Form Elements -->
            <div class="col-lg-12">
                <div  role="tabpanel" aria-labelledby="edit-settings-tab" class="tab-pane fade edit-settings-tab active show">
                    <div class="card" >
                        
                        <div class="card-header d-flex align-items-center">
                            <div class="col-md-6">
                                <h3 class="h4">Update User Information</h3>
                            </div>
                            <div class="col-md-6">
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                                </div>
                            </div>
                        </div>
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
                        <div class="card-body">
                            {!! Form::model($user, ['method' => 'PATCH','class' => 'form-horizontal row','route' => ['users.update', $user->id]]) !!}
                            
                                @csrf
                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Last Name:</label>
                                        {!! Form::text('last_name', $user->userinfo->last_name, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>First Name:</label>
                                        {!! Form::text('first_name', $user->userinfo->first_name, array('placeholder' => 'First Name','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Middle Name:</label>
                                        {!! Form::text('middle_name', $user->userinfo->middle_name, array('placeholder' => 'Middle Name','class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    {!! Form::email('email', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone Number</label>
                                    {!! Form::text('contact', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label>User Type</label>
                                    {!! Form::select('type',$type, null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Batch</label>
                                    {!! Form::select('group_id', $group, null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label>User Status</label>
                                    {!! Form::select('status',$status, null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label>User Access</label>
                                    {!! Form::select('access',$access, null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group col-md-6">
                                    <label>User Position</label>
                                    {!! Form::select('position',$position, null, ['class' => 'form-control']) !!}
                                </div>
    
                                
                                <div class="line"></div>
                                <div class="form-group col-md-6">
                                    <button type="button" class="btn btn-secondary">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

{{-- 
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
                            <div class="form-group">
                                <label>Batch</label>
                                <select name="status" class="form-control">
                                    @foreach($_group as $group)
                                    <option {{ $group->id ==  $data->group_id ? "selected" : "" }}>{{ $group->name }}</option>
                                    @endforeach
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
                                <select name="position" class="form-control">
                                    <option {{ $data->position == "Member" ? "selected" : "" }}>Member</option>
                                    <option {{ $data->position == "President" ? "selected" : "" }}>President</option>
                                    <option {{ $data->position == "Vice-President" ? "selected" : "" }}>Vice-President</option>
                                    <option {{ $data->position == "Secretary" ? "selected" : "" }}>Secretary</option>
                                    <option {{ $data->position == "Treasurer" ? "selected" : "" }}>Treasurer</option>
                                    <option {{ $data->position == "Auditor" ? "selected" : "" }}>Auditor</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>User Status</label>
                                <select name="status" class="form-control">
                                    <option {{ $data->status == "0" ? "selected" : "" }}>Need Approval</option>
                                    <option {{ $data->status == "1" ? "selected" : "" }}>Active</option>
                                    <option {{ $data->status == "2" ? "selected" : "" }}>Deactivated</option>
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
@endsection --}}

