@extends('healthprovider.layouts.app')

@section('content')
<div id="health-reg">

<h3>Fill Up </h3>
<section>
<h3>Healthcare Partner Registration </h3>

<h6 class="text-weight-bold text-info"></h6>
<div class="row">
    <div class="form-group col-md-6">
        <label for="exampleFormControlInput1" class="text-primary">Business Name or Company Name</label>
        <input type="text" class="form-control" id="" placeholder="Complete Business Name or Company Name *">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label for="exampleFormControlInput1" class="text-primary">Type of Healthcare Partner *</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Hospital/Clinic
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                Healthcare organization
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
            <label class="form-check-label" for="exampleRadios3">
                Government
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" >
            <label class="form-check-label" for="exampleRadios4">
                Other:
            </label>
            <input type="text" class="form-control form-control-sm col-md-4" id="" placeholder="Please specify">
        </div>

    </div>
</div>
<label for="exampleFormControlInput1" class="text-primary">Company Address</label>
<div class="row">
    <div class="form-group col-md-4">
        <input type="text" class="form-control" id="" placeholder="House/ Building no., Street *">
    </div>
    <div class="form-group col-md-4">
        <input type="text" class="form-control" id="" placeholder="Postal Code *">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        <input type="text" class="form-control" id="" placeholder="Apartment, Suite No., etc. (Optional)">
    </div>
    <div class="form-group col-md-4">
        <input type="text" class="form-control" id="" placeholder="Region *">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        <input type="text" class="form-control" id="" placeholder="Barangay/ Village *">
    </div>
    <div class="form-group col-md-4">
        <input type="text" class="form-control" id="" placeholder="Country *">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        <input type="text" class="form-control" id="" placeholder="City *">
    </div>
</div>
<label for="exampleFormControlInput1" class="text-primary">Contact Information</label>
<div class="row">
    <div class="form-group col-md-4">
        <input type="text" class="form-control" id="" placeholder="Telephone Number *">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        <input type="text" class="form-control" id="" placeholder="Cellphone Number *">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        <input type="text" class="form-control" id="" placeholder="Company Email Address *">
    </div>
</div>
</section>

<h3>Represent</h3>
    <section>
        <label for="exampleFormControlInput1" class="text-primary">Company Representative</label>
        <div class="row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="" placeholder="First Name *">
            </div>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="" placeholder="Last Name *">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleFormControlInput1" class="text-primary">Gender *</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="male" value="male" checked>
                    <label class="form-check-label" for="male">
                      Male
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="female" value="female">
                    <label class="form-check-label" for="female">
                      Female
                    </label>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="" placeholder="Middle Initial *">
            </div>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="" placeholder="Suffix (if applicable only) ">
                <small>(e.g. Sr., Jr., III)</small>
            </div>

        </div>
        <label for="exampleFormControlInput1" class="text-primary"> Contact Information </label>

        <div class="row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="" placeholder="Email Address *">
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
                        Name
                    <a class="btn float-right">
                        <span class="fa fa-edit"></span>
                    </a>

                </div>
                <div class="card-body">
                    <h5>Business Name or company Name</h5>
                    <p class="text-info">Null</p>
                    <h5>Type of Healthcare Partner</h5>
                    <p class="text-info">Null</p>
                    <h5>Hospital/Clinic</h5>
                    <p class="text-info">Null</p>
                    <h5>Company Address</h5>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h6>House/ Building no., Street</h6>
                            <p class="text-info">Null</p>
                        </div>
                        <div class="form-group col-md-4">
                            <h6>Postal Code</h6>
                            <p class="text-info">Null</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h6>Apartment, Suite No., etc. (Optional)</h6>
                            <p class="text-info">Null</p>
                        </div>
                        <div class="form-group col-md-4">
                            <h6>Region</h6>
                            <p class="text-info">Null</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h6>Barangay/ Village</h6>
                            <p class="text-info">Null</p>
                        </div>
                        <div class="form-group col-md-4">
                            <h6>Country</h6>
                            <p class="text-info">Null</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h6>City</h6>
                            <p class="text-info">Null</p>
                        </div>
                    </div>
                    <h5>Contact Information</h5>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h6>Telephone Number</h6>
                            <p class="text-info">Null</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h6>Cellphone Number</h6>
                            <p class="text-info">Null</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h6>Company Email Address</h6>
                            <p class="text-info">Null</p>
                        </div>
                    </div>
                    <h5>Company Representative</h5>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h6>First Name</h6>
                            <p class="text-info">Null</p>
                        </div>
                        <div class="form-group col-md-4">
                            <h6>Gender</h6>
                            <p class="text-info">Null</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h6>Middle Name</h6>
                            <p class="text-info">Null</p>
                        </div>
                        <div class="form-group col-md-4">
                            <h5>Contact Information</h5>
                            <h6>Email Address</h6>
                            <p class="text-info">Null</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h6>Suffix (if applicable only)</h6>
                            <p class="text-info">Null</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                        <label class="form-check-label" for="flexCheckDefault">
                            I agree to your terms and conditions.
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                        <label class="form-check-label" for="flexCheckChecked">
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
                <label for="exampleInputPassword1" class="form-label">Create Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1" class="form-label">Repeat Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>

        </div>

    </section>
</div>


@endsection
