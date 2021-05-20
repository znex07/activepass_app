@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-3">
        <!--<div class="col-md-8">-->
        <!--    <div class="card mt-5">-->

                <!--<div class="card-body">-->
                <!--    <form method="POST" action="/register-user">-->
                <!--        @csrf-->

                <!--        <div class="form-group row">-->
                <!--            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>-->

                <!--            <div class="col-md-6">-->
                <!--                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>-->

                <!--                @error('name')-->
                <!--                    <span class="invalid-feedback" role="alert">-->
                <!--                        <strong>{{ $message }}</strong>-->
                <!--                    </span>-->
                <!--                @enderror-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        {{-- <div class="form-group row">-->
                <!--            <label class="col-md-4 col-form-label text-md-right">Vaccine</label>-->
                <!--            <div class="col-md-6 dropdown">-->

                <!--                    <select class="form-control" id="vaccine" name="vaccine" aria-labelledby="dropdownMenuButton">-->
                <!--                        <option selected>Sinopharm</option>-->
                <!--                        <option >Kexing</option>-->
                <!--                        <option >Can Sino</option>-->
                <!--                        <option >AstraZeneca</option>-->
                <!--                        <option >Pfizer</option>-->
                <!--                        <option >Moderna</option>-->
                <!--                        <option >Johnsons & Johnsons</option>-->
                <!--                        <option >Novovax</option>-->
                <!--                        <option >Satellite 5</option>-->
                <!--                    </select>-->
                <!--            </div>-->
                <!--        </div> --}}-->
                <!--        <div class="form-group row">-->
                <!--            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>-->
                <!--            <div class="col-md-6">-->
                <!--                <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="+639" required>-->
                <!--                @error('phone_number')-->
                <!--                    <span class="invalid-feedback" role="alert">-->
                <!--                        <strong>{{ $message }}</strong>-->
                <!--                    </span>-->
                <!--                @enderror-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="form-group row">-->

                <!--            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->

                <!--            <div class="col-md-6">-->
                <!--                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">-->
                <!--                @error('email')-->
                <!--                    <span class="invalid-feedback" role="alert">-->
                <!--                        <strong>{{ $message }}</strong>-->
                <!--                    </span>-->
                <!--                @enderror-->
                <!--            </div>-->
                <!--        </div>-->

                <!--        <div class="form-group row">-->
                <!--            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>-->

                <!--            <div class="col-md-6">-->
                <!--                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">-->

                <!--                @error('password')-->
                <!--                    <span class="invalid-feedback" role="alert">-->
                <!--                        <strong>{{ $message }}</strong>-->
                <!--                    </span>-->
                <!--                @enderror-->
                <!--            </div>-->
                <!--        </div>-->

                <!--        <div class="form-group row">-->
                <!--            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>-->

                <!--            <div class="col-md-6">-->
                <!--                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">-->
                <!--            </div>-->
                <!--        </div>-->

                <!--        <div class="form-group row mb-0">-->
                <!--            <div class="col-md-6 offset-md-4">-->
                <!--                <button type="submit" class="btn btn-primary">-->
                <!--                    {{ __('Register') }}-->
                <!--                </button>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </form>-->
                <!--</div>-->
            <!--</div>-->
            <div class="card mt-3 bg-light">
                <form method="POST" action="/register-user">
                        @csrf
    <article class="card-body mx-auto" style="max-width: 600px;">
    	<h4 class="card-title mt-3 text-center">Register for VaxPass</h4>
    	{{-- <p class="text-center">Get started with your free account</p> --}}
    	{{-- <p>
    		<a href="" class="btn btn-block btn-danger"> <i class="fab fa-google"></i>   Login via Gmail</a>
    		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
    	</p>
    	<p class="divider-text">
            <span class="bg-light">OR</span>
        </p> --}}
    	<form>
    	<div class="form-group input-group">
    		<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
    		 </div>
             <input id="fname" name="fname" class="form-control" placeholder="First name" type="text">
             <input id="mname" name="mname" class="form-control" placeholder="Middle name" type="text">
             <input id="lname" name="lname" class="form-control" placeholder="Last name" type="text">
        </div> <!-- form-group// -->
        <div class="form-group input-group{{ $errors->has('email') ? ' has-error' : '' }}">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
    		 </div>
            <!--<input class="form-control" name="email" placeholder="Email address" type="email">-->
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div> <!-- form-group// -->
        <div class="form-row">

            <div class="form-group col">
                <label for="inputAddress">Address</label>
                <input name="address1" id="address1" type="text" class="form-control" id="inputAddress" placeholder="Unit # /Block and Lot / Street">
            </div>

            <div class="form-group col">
                <label for="inputAddress2">Address 2</label>
                <input id="address2" name="address2" type="text" class="form-control" id="inputAddress2" placeholder="Building / Subdivision / Village / floor">
            </div>
        </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="brgy">Barangay</label>
              <input id="brgy" type="text" class="form-control" >
            </div>
            <div class="form-group col-md-4">
              <label for="city">City</label>
              <select id="city" name="city" class="form-control city">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="text" name="zip" class="form-control" id="inputZip">
            </div>
          </div>
        <div class="form-group input-group">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    		</div>
    		<select class="custom-select" name="phone_code" style="max-width: 120px;">
    		    <option selected="">+63</option>
    		    <option value="1">+97</option>
    		    <option value="2">+19</option>
    		    <option value="3">+70</option>
    		</select>
        	<input name="phone_number" class="form-control" placeholder="Phone number" type="text">
        </div> <!-- form-group// -->
        <div class="form-group input-group">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
    		</div>
    		<select class="form-control" >
    			<option selected="" disabled> Select User type</option>
    			<option>Healthcare Provider</option>
    			<option>Patient</option>
    			<option>Doctor</option>
    		</select>
    	</div> <!-- form-group end.// -->
        <div class="form-group input-group">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    		</div>
            <input class="form-control" name="password" placeholder="Create password" type="password">
        </div> <!-- form-group// -->
        <div class="form-group input-group">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    		</div>
            <input class="form-control" placeholder="Repeat password" type="password">
        </div> <!-- form-group// -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
        </div> <!-- form-group// -->
        <p class="text-center">Have an account? <a href="/login">Log In</a> </p>
    </form>
    </article>
</div> <!-- card.// -->
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#city").change(function(){
            var selectedCity = $(".city option:selected").val();
            $.ajax({
                type: "GET",
                url: "/get_city",
                data: { country : selectedCity } 
            }).done(function(data){
                console.log(data);
            });
        });
    });
    </script>
@endsection
