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
                            {!! Form::open(array('route' => 'users.store','method'=>'POST','class' => 'form-horizontal row')) !!}
                            
                                @csrf
                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Last Name:</label>
                                        {!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>First Name:</label>
                                        {!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Middle Name:</label>
                                        {!! Form::text('middle_name', null, array('placeholder' => 'Middle Name','class' => 'form-control')) !!}
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

                                <div class="form-group col-md-6">
                                    
                                    <label>Password:</label>
                                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    
                                    <label>Confirm Password:</label>
                                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                                    
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