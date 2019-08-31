@extends('layouts.auth')
@section('content')
<div class="container login-form">
    <div class="col-md-6 offset-md-3">
        <div class="note">
            <p>Login your PES Alumni account now!</p>
        </div>
        <div class="form-content">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" placeholder="Enter Email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" placeholder="Enter Password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="button-container form-group">
                            <button class="btn-submit-form" type="submit">Log In</button>
                        </div>
                        <div class="form-group form-content-info">
                            <a class="signup" href="/sign-up">{{ __("Don't have an account?") }}</a>
                            <br>
                            @if (Route::has('password.request'))<a class="signup" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>@endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection