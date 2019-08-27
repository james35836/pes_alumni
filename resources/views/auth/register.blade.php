@extends('layouts.auth')
@section('content')
<style>
    .form-group{
        padding:0px 10px !important;
    }
</style>
<div class="container d-flex align-items-center">
    <div class="form-holder has-shadow">
      <div class="row">
        <!-- Logo & Information Panel-->

        <!-- Form Panel    -->
        <div class="col-lg-10 bg-white offset-md-1">
          <div class="form d-flex align-items-center">
            <div class="content">
                <form method="POST" action="/sign-up" id="loginForm" style="max-width:100%;">
                @csrf
                @if(session()->has('pin_error'))
                <div class="alert alert-success">
                    {{ session()->get('pin_error') }}
                </div>
                @endif
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
                        <label>Work</label>
                        <select class="form-control {{ $errors->has('work') ? ' is-invalid' : '' }}" id="work" name="work" value="{{ old('work') }}" required>
                            <option>Education</option>
                            <option>IT/Computer</option>
                            <option>Agricuture</option>
                            <option>House Wife</option>
                        </select>
                        @if ($errors->has('work'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('work') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Pin Code</label>
                        <input id="pin_id" type="pin_id" placeholder="Pin Code" class="form-control{{ $errors->has('pin_id') ? ' is-invalid' : '' }}" name="pin_id" value="{{ old('pin_id') }}" required>
                        @if ($errors->has('pin_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('pin_id') }}</strong>
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
                    <button type="submit" class="btn btn-primary loginbtn" style="border-radius: 0px;">Register</button>
                </div>
            </form>
            @if (Route::has('password.request'))
            <a class="signup" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
            <br>
            <small>Already have account? </small><a href="/sign-in" class="signup">Sign In</a>
        </div>
    </div>
</div>
</div>
</div>
</div>



@endsection