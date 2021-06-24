@extends('healthprovider.layouts.app')

@section('content')
<form method="POST" action="health_reg" id="provider-new">
    @csrf
<div id="health-reg">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h3>Fill Up </h3>
    <section data-step="0">
    <h4>Healthcare Partner Registration </h4>
    <h6 class="text-weight-bold text-info"></h6>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="business_name" class="text-primary">Business Name or Company Name</label>
            <input type="text"  placeholder="Complete Business Name or Company Name *" class="form-control" name="business_name" id="business_name" value="{{ old('business_name') }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="exampleFormControlInput1" class="text-primary">Type of Healthcare Partner *</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="business_type" id="exampleRadios1" value="hospital" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Hospital/Clinic
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="business_type" id="exampleRadios2" value="health_org">
                <label class="form-check-label" for="exampleRadios2">
                    Healthcare organization
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="business_type" id="exampleRadios3" value="government" >
                <label class="form-check-label" for="exampleRadios3">
                    Government
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="business_type" id="other_rb" >
                <label class="form-check-label" for="other_rb">
                    Other:
                </label>
                <input type="text" name="business_type  " class="form-control form-control-sm col-md-4" id="other" placeholder="Please specify" disabled>
            </div>

        </div>
    </div>
    <label for="exampleFormControlInput1" class="text-primary">Company Address</label>
    <div class="row">
        <div class="form-group col-md-4">
            <input type="text" class="form-control" id="in_building" name="building" placeholder="House/ Building no., Street *" value="{{ old('building') }}">
        </div>
        <div class="form-group col-md-4">
            <input type="text" class="form-control" id="in_postal" name="postal_code"  placeholder="Postal Code *" value="{{ old('postal_code') }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <input type="text" id="in_apartment" class="form-control" name="apartment" placeholder="Apartment, Suite No., etc. (Optional)" value="{{ old('apartment') }}">
        </div>
        <div class="form-group col-md-4">
            <input type="text" class="form-control" id="in_brgy" name="brgy"  placeholder="Barangay/ Village *" value="{{old('brgy')}}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <select id="province" name="province"
            class="form-control" value="{{old('province')}}">
                <option selected hidden disabled>Choose Province</option>
                @foreach ($province as $prov)
                <option value="{{$prov->id}}">{{$prov->name}}</option>
                @endforeach
              </select>
        </div>
        <div class="form-group col-md-4">
            <select id="city" name="city" class="form-control">
                <option selected disabled hidden>City</option>
                <option>...</option>

              </select>
        </div>
    </div>
    <div class="row">

        <div class="form-group col-md-4">
            <input type="text" class="form-control" name="country"  placeholder="Country *" value="{{old('country')}}">
        </div>
    </div>
    <label for="exampleFormControlInput1" class="text-primary">Contact Information</label>
    <div class="row">
        <div class="form-group col-md-4">
            <input type="text" class="form-control" name="tel" placeholder="Telephone Number *" value="{{old('tel')}}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <input type="text" class="form-control" name="cp" placeholder="Cellphone Number *" value="{{old('cp')}}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <input type="text" class="form-control" name="company_email" placeholder="Company Email Address *" value="{{old('company_email')}}">
        </div>
    </div>
    </section>

<h3>Represent</h3>
    <section data-step="1">
        <label for="exampleFormControlInput1" class="text-primary">Company Representative</label>
        <div class="row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="fname1" placeholder="First Name *" value="{{old('fname1')}}">
            </div>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="lname1" placeholder="Last Name *" value="{{old('lname1')}}">
            </div>

            <div class="form-group col-md-4">
                <label for="exampleFormControlInput1" class="text-primary">Gender *</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender1" id="male1" value="male" checked>
                    <label class="form-check-label" for="male">
                      Male
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender1" id="female1" value="female">
                    <label class="form-check-label" for="female">
                      Female
                    </label>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="mname1"  placeholder="Middle Initial *" value="{{old('mname1')}}">
            </div>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="suffix_name1"  placeholder="Suffix (if applicable only) ">
                <small>(e.g. Sr., Jr., III)</small>
            </div>

        </div>
        <label for="exampleFormControlInput1" class="text-primary"> Contact Information </label>

        <div class="row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="email" placeholder="Email Address *" value="{{old('email')}}">
            </div>
        </div>
        <label for="exampleFormControlInput1" class="text-success">Company Representative 2</label>
        <div class="row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="fname2" value="{{old('fname2')}}" placeholder="First Name *">
            </div>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="lname2" value="{{old('lname2')}}" placeholder="Last Name *">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleFormControlInput1" class="text-primary">Gender *</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender2" id="male" value="male" checked>
                    <label class="form-check-label" for="male">
                      Male
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender2" id="female" value="female">
                    <label class="form-check-label" for="female">
                      Female
                    </label>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="mname2" value="{{old('mname2')}}" placeholder="Middle Initial *">
            </div>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="suffix_name2" value="{{old('suffix_name2')}}"  placeholder="Suffix (if applicable only) ">
                <small>(e.g. Sr., Jr., III)</small>
            </div>

        </div>
        <label for="exampleFormControlInput1" class="text-primary"> Contact Information </label>

        <div class="row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="email2" value="{{old('email2')}}" placeholder="Email Address *">
            </div>
        </div>
    </section>
<h3>Confirm</h3>
    <section>
        <h3>Healthcare Partner Confirmation Information</h3>
        <div class="row">
        <div class="col-sm-12">
            <div class="card ">
                <div class="card-header">
                       <h4 class="text-primary"><a class="btn float-right">
                        <span class="fa fa-edit"></span>
                    </a>Name</h4>


                </div>
                <div class="card-body">
                    <h5>Business Name or company Name</h5>
                    <p class="text-primary text-uppercase" id="conf_business_name">Null</p>
                    <h5>Type of Healthcare Partner</h5>
                    <p class="text-primary text-uppercase" id="conf_business_type">Null</p>
                    <h5>Company Address</h5>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h6>House/ Building no., Street</h6>
                            <p id="conf_c_address" class="text-primary text-uppercase">Null</p>
                        </div>
                    </div>

                    <h5>Contact Information</h5>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h6>Telephone Number</h6>
                            <p class="text-primary text-uppercase" id="conf_tel">Null</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h6>Cellphone Number</h6>
                            <p class="text-primary text-uppercase" id="conf_cp">Null</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h6>Company Email Address</h6>
                            <p class="text-primary text-uppercase" id="conf_c_email">Null</p>
                        </div>
                    </div>
                    <h5>Company Representative</h5>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h6>Name1</h6>
                            <p class="text-primary text-uppercase" id="conf_r_fname1">Null</p>
                        </div>
                        <div class="form-group col-md-4">
                            <h6>Gender</h6>
                            <p class="text-primary text-uppercase" id="conf_gender1">Null</p>
                        </div>
                        <div class="form-group col-md-4">
                            <h5>Contact Information</h5>
                            <h6>Email Address</h6>
                            <p class="text-primary text-uppercase" id="conf_r_email1">Null</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h6>Name2</h6>
                            <p class="text-primary text-uppercase" id="conf_r_fname2">Null</p>
                        </div>
                        <div class="form-group col-md-4">
                            <h6>Gender</h6>
                            <p class="text-primary text-uppercase" id="conf_gender2">Null</p>
                        </div>
                        <div class="form-group col-md-4">
                            <h5>Contact Information</h5>
                            <h6>Email Address</h6>
                            <p class="text-primary text-uppercase" id="conf_r_email2">Null</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="agree" value="" checked>
                        <label class="form-check-label" for="agree">
                            I agree to your terms and conditions.
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input bg-success" id="confirm" type="checkbox" value="" checked>
                        <label class="form-check-label" for="confirm">
                            I confirm that all the information I placed are authentic.
                        </label>
                      </div>
                </div>

            </div>
        </div>
        </div>
    </section>
<h3>Password</h3>
    <section>
        <h2>Generate Password</h2>
        <p class="text-primary"><i class="fas fa-info-circle"></i> Password must be 8 to 12 characters long</p>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="password">Create Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="{{old('password')}}">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" value="{{old('password_confirmation')}}">
            </div>

        </div>
        <div class="g-recaptcha" data-sitekey="6LeszzQbAAAAAGH6CY3279MGaykLrlo0-acv3FUj"></div>
    </section>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('change','#province', function(){
            $("#city option").remove();
            $.ajax({
                type: 'GET',
                url: '/fetchCity/'+$(this).val(),
                success: function(data){
                    $.each( data, function(id, value){
                        $('#city').append('<option > '+data[id]+'</option>');
                    })
                }
            });

    });
    $(document).on('click','#other_rb', function(){
        $('#other').removeAttr('disabled');
        $('#other').focus();
    });

</script>
@endsection
