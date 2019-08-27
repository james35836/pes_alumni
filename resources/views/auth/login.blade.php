@extends('layouts.auth')

@section('content')
<div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white offset-md-3">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form class="form-validate" method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="form-group">
                        <input id="email" type="email" required data-msg="Please enter your email" class="input-material @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" style="display:block;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="email" class="label-material">{{ __('Email') }}</label>
                          
                    </div>

                    <div class="form-group">
                        <input id="password" type="password" required data-msg="Please enter your password" class="input-material @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password" autofocus>

                        @error('password')
                        {{-- {{ dd($message) }} --}}
                            <span class="invalid-feedback" style="display:block;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password" class="label-material">{{ __('Password') }}</label>
                          
                    </div>
                    <div class="form-group terms-conditions">
                      <input id="remember" name="remember" type="checkbox" value="1" class="checkbox-template"  {{ old('remember') ? 'checked' : '' }}>
                      <label for="register-agree">{{ __('Remember Me') }}</label>

                      
                    </div>
                    <div class="form-group">
                      <button id="regidter" type="submit" class="btn btn-primary">Login</button>
                    </div>
                  </form>
                    @if (Route::has('password.request'))
                        <a class="signup" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    <br>
                  <small>Don't have account? </small><a href="/sign-up" class="signup">Sign Up</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection


