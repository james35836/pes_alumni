@extends('layouts.backend')
@section('content')
<!-- Forms Section-->
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <!-- Basic Form-->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-close">
                    </div>
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Profile Menu</h3>
                    </div>
                    <!-- remove this if business  -->
                    <div class="card-body text-center">
                        <div class="client-avatar">
                            <img src="{{ $user->userinfo->user_profile }}" alt="..." class="img-fluid rounded-circle">
                            <div class="status bg-green"></div>
                        </div>
                        <div class="client-title">
                            <h3><br>{{ $user->userinfo->name }}</h3>
                        </div>
                    </div>
                    @if(Auth::user()->id == $user->id)
                    <div class="card-body">
                        <div id="v-pills-tab" role="tablist" aria-orientation="vertical" class="nav flex-column nav-pills">
                            <a data-toggle="pill" href=".edit-profile-tab" role="tab" aria-controls="edit-profile-tab" aria-selected="true" class="nav-link active">Account</a> 
                            <a data-toggle="pill" href=".edit-settings-tab" role="tab" aria-controls="edit-settings-tab" aria-selected="false" class="nav-link">Account Settings</a> 
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <!-- Form Elements -->
            <div class="col-lg-8 tab-content">
                <div  role="tabpanel" aria-labelledby="edit-profile-tab" class="tab-pane fade edit-profile-tab active show">
                    <div class="card" >
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Basic Information</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Name</label>
                                    <div class="col-sm-9">{{$user->userinfo->name}}</div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Email</label>
                                    <div class="col-sm-9">{{$user->email}}</div>
                                </div>
                                @if($user->userinfo->contact)
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Contact</label>
                                    <div class="col-sm-9">{{$user->userinfo->contact}}</div>
                                </div>
                                @endif
                                @if($user->userinfo->gender)
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Gender</label>
                                    <div class="col-sm-9">{{$user->userinfo->gender}}</div>
                                </div>
                                 @endif
                                @if($user->userinfo->civil_status)
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Status</label>
                                    <div class="col-sm-9">{{$user->userinfo->civil_status}}</div>
                                </div>
                                 @endif
                                @if($user->userinfo->birthdate)
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Birthdate</label>
                                    <div class="col-sm-9">{{$user->userinfo->birthdate}}</div>
                                </div>
                                 @endif
                                @if($user->userinfo->address)
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Address</label>
                                    <div class="col-sm-9">{{$user->userinfo->address}}</div>
                                </div>
                                 @endif
                                @if($user->userinfo->high_school)
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">High School</label>
                                    <div class="col-sm-9">{{$user->userinfo->high_school}}</div>
                                </div>
                                 @endif
                                @if($user->userinfo->college_school)
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">College</label>
                                    <div class="col-sm-9">{{$user->userinfo->college_school}}</div>
                                </div>
                                 @endif
                                @if($user->userinfo->work)
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Work</label>
                                    <div class="col-sm-9">{{$user->userinfo->work}}</div>
                                </div>
                                 @endif
                                @if($user->userinfo->biography)
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Biography</label>
                                    <div class="col-sm-9">{{$user->userinfo->biography}}</div>
                                </div>
                                 @endif
                                @if($user->userinfo->fb_link)
                                
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Facebook</label>
                                    <div class="col-sm-9">{{$user->userinfo->fb_link}}</div>
                                </div>
                                 @endif
                                @if($user->userinfo->twitter_link)
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Twitter</label>
                                    <div class="col-sm-9">{{$user->userinfo->twitter_link}}</div>
                                </div>
                                 @endif
                                @if($user->userinfo->instagram_link)
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Instagram</label>
                                    <div class="col-sm-9">{{$user->userinfo->instagram_link}}</div>
                                </div>
                                 @endif
                                @if($user->userinfo->linkedin_link)
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">LinkedIn</label>
                                    <div class="col-sm-9">{{$user->userinfo->linkedin_link}}</div>
                                </div>
                                 @endif


                                
                            </form>
                        </div>
                    </div>
                </div>
                <div  role="tabpanel" aria-labelledby="edit-settings-tab" class="tab-pane fade edit-settings-tab">
                    <div class="card" >
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Update Information</h3>
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
                                    <div class="form-group">
                                        <label>Birthdate:</label>
                                        {!! Form::text('birthdate', $user->userinfo->birthdate, array('placeholder' => 'Birthdate','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number:</label>
                                        {!! Form::text('contact', $user->userinfo->contact, array('placeholder' => 'Phone Number','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Gender:</label>
                                        {!! Form::select('gender',$gender, $user->userinfo->gender, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Status:</label>
                                        {!! Form::select('civil_status',$civil_status, $user->userinfo->civil_status, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>High School:</label>
                                        {!! Form::text('high_school', $user->userinfo->high_school, array('placeholder' => 'High School','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>College:</label>
                                        {!! Form::text('college_school', $user->userinfo->college_school, array('placeholder' => 'College','class' => 'form-control')) !!}
                                    </div>
                                </div>
                                 <div class="form-group col-md-6">
                                    <label>Work</label>
                                    {!! Form::select('work',$work, $user->userinfo->work, ['class' => 'form-control']) !!}
                                </div>


                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Address:</label>
                                        {!! Form::textarea('address', $user->userinfo->address, array('placeholder' => 'Address','rows'=>2,'class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Biography:</label>
                                        {!! Form::textarea('biography', $user->userinfo->biography, array('placeholder' => 'Address','rows'=>2,'class' => 'form-control')) !!}
                                    </div>
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