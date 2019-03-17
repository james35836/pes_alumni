@extends('layouts.auth')
@section('content')

<div class="auth-container mg-t-30 p-30">
    
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 m-auto">
            <div class="sparkline8-list mt-b-30">
                
                <div class="sparkline8-graph">
                    <div class="basic-login-form-ad">
                        
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="basic-login-inner">
                                    <h3>Sign Up</h3>
                                    <p>Create your account.</p>
                                    <form method="POST" action="/sign-up" id="loginForm">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label>First Name</label>
                                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>
                                                @if ($errors->has('first_name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('first_name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Middle Name</label>
                                                <input id="middle_name" type="text" placeholder="Middle Name" class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" name="middle_name" value="{{ old('middle_name') }}" required autofocus>
                                                @if ($errors->has('middle_name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('middle_name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Last Name</label>
                                                <input id="last_name" type="text" placeholder="Last Name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>
                                                @if ($errors->has('last_name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('last_name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Email</label>
                                                <input id="email" type="email" placeholder="Email address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Phone Number</label>
                                                <input id="contact" type="text" placeholder="Phone Number" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact') }}" required autofocus>
                                                @if ($errors->has('contact'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('contact') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Gender</label>
                                                <select class="form-control {{ $errors->has('gender') ? ' is-invalid' : '' }}" id="gender" name="gender" value="{{ old('gender') }}" required>
                                                    <option selected=""> Select Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                                @if ($errors->has('gender'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('gender') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Birthdate</label>
                                                <input id="datepicker" type="text" placeholder="Birthdate" class="form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }}" name="birthdate" value="{{ old('birthdate') }}" required autofocus>
                                                @if ($errors->has('birthdate'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('birthdate') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Batch</label>
                                                <select class="form-control {{ $errors->has('group_id') ? ' is-invalid' : '' }}" id="group_id" name="group_id" value="{{ old('group_id') }}" required>
                                                    <option value=""> Select Group</option>
                                                    @foreach($_group as $group)
                                                    <option value="{{$group->id}}">{{$group->name}}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('group_id'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('group_id') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Create Password</label>
                                                <input id="password" type="password" placeholder="Create Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>
                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Confirm Password</label>
                                                <input id="password_confirmation" type="password_confirmation" placeholder="Confirm Password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" value="{{ old('password_confirmation') }}" required autofocus>
                                                @if ($errors->has('password_confirmation'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success loginbtn">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        <hr >
                        <p class="text-center">OR</p>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="login-social-inner text-center">
                                    <a href="{{ url('/login/twitter') }}" class="button btn-social basic-ele-mg-b-10 facebook span-left"> <span><i class="fa fa-facebook"></i></span> Facebook </a>
                                    <a href="{{ url('/login/twitter') }}" class="button btn-social basic-ele-mg-b-10 twitter span-left"> <span><i class="fa fa-twitter"></i></span> Twitter </a>
                                    <a href="{{ url('/login/twitter') }}" class="button btn-social basic-ele-mg-b-10 googleplus span-left"> <span><i class="fa fa-google-plus"></i></span> Google+ </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center login-footer">
                <p>Copyright © {{date('Y')}}. All rights reserved. Powered by <a href="#">James Omosora</a></p>
            </div>
        </div>
        
    </div>
</div>
@endsection