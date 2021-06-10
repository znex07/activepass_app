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
        <div class="col-sm-8">
            <div class="card ">
                <div class="card-header">
                        Name
                    <a class="btn float-right">
                        <span class="fa fa-edit"></span>
                    </a>

                </div>
                <div class="card-body">
                    <h4>Business Name or company Name</h4>
                    <p class="text-info">Null</p>
                    <h4>Type of Healthcare Partner</h4>
                    <p class="text-info">Null</p>
                    <h4>Hospital/Clinic</h4>
                    <p class="text-info">Null</p>
                    <h4>Company Address</h4>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <h4>House/ Building no., Street</h4>
                            <p class="text-info">Null</p>
                        </div>
                        <div class="form-group col-md-4">
                            <h4>Postal Code</h4>
                            <p class="text-info">Null</p>
                        </div>
                    </div>
                    <h4>Apartment, Suite No., etc. (Optional)</h4>
                    <h4>Apartment, Suite No., etc. (Optional)</h4>
                </div>

            </div>
        </div>
        </div>
    </section>
</div>


@endsection
