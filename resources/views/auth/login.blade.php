@extends('layouts.auth')

@section('content')
<div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white offset-md-4">
              <div class="form d-flex align-items-center">
                <div class="content">
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
                    @if (Route::has('password.request'))
                        <a class="signup" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    <br>
                  <small>Don't have account? </small><a href="/" class="signup">Sign Up</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection


