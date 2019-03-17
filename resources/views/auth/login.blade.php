@extends('layouts.auth')
@section('content')
<div class="auth-container mg-t-30 p-30">
    
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12 m-auto">
            <div class="sparkline8-list mt-b-30">
                
                <div class="sparkline8-graph">
                    <div class="basic-login-form-ad">
                        
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="basic-login-inner">
                                    <h3>Sign In</h3>
                                    <p>Register User can get sign here</p>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group-inner">
                                            <label>Email</label>
                                            <input type="email" placeholder="Enter Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Password</label>
                                            <input type="password" placeholder="Enter Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="login-btn-inner">
                                            <div class="inline-remember-me">
                                                <button class="btn btn-sm btn-primary pull-right login-submit-cs" type="submit">Log In</button>
                                                <label>
                                                    <div class="icheckbox_square-green" style="position: relative;">
                                                        <input type="checkbox" class="i-checks" style="position: absolute; opacity: 0;" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                    </div> Remember me
                                                </label>
                                            </div>
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