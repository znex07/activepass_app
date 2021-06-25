@extends('healthprovider.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4" style="padding-bottom:10%">
            <div class="card mt-5 " style="height:90% !important">
                <div class="card-header text-center">
            <img src="/img/plus.png" alt="" srcset="" class="mt-12" height="20" width="20">
            <strong class="mr-auto">ACTIVEPASS</strong>
              </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mt-2 font-weight-bold text-primary"><h5>Welcome!</h5></div>
                        <div class="mt-2">log in to access your account.</div>

                        <div class="form-group row pt-4">

                            <div class="col-md-12">
                            <label for="email" class="col-form-label text-md-right">{{ __('Username/EMail Address') }}</label>
                            <div class="form-group input-group">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
    		 </div>
            <!--<input class="form-control" name="email" placeholder="Email address" type="email">-->
            <input id="email" type="email" class="form-control" name="email" value="" placeholder="Enter Username or Email" required="">
                    </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="form-group input-group">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    		</div>
            <input class="form-control" name="password" placeholder="Enter your password" type="password" required="">
        </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <div class="text-center"> 
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5 mt-4">
        <img src="/img/Vaccine-amico 1.png" alt="" srcset="" class="mt-6" height="527" width="600">
        
        </div>
    </div>
</div>
@endsection
