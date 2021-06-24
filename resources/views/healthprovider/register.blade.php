@extends('healthprovider.layouts.app')

@section('content')
<form method="POST" action="health_reg" id="provider-new">
    @csrf
<div class="card">
    <div class="card-header">
        Register
    </div>
    <div class="card-body bg-dark text-dark">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div id="health-reg" >
        <h3><i class="fas fa-user"></i> </h3>
        <section data-step="0">
            <h4 class="text-weight-bold text-info"></h4>
            <div class="row">
                <div class="form-group col-md-6">
                    <h4 class="text-primary">Business Name or Company Name </h4>
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
            <h4 for="exampleFormControlInput1" class="text-primary">Company Address</h4>
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
        </div>
    </div>
</div>
</form>


<script>
    $(document).on('change','#province', function(){
            $("#city option").remove();
            $.ajax({
                type: 'GET',
                url: '/city/'+$(this).val(),
                success: function(data){
                    $.each( data, function(id, value){
                        $('#city').append('<option > '+data[id]+'</option>');
                    })
                }
            });

    });
    $(document).on('click','#other_rb', function(){
        if($(this).is(":checked")){
            $('#other').removeAttr('disabled');
            $('#other').focus();
        }else{
            $('#other').attr('disabled');
        }
    });

</script>
@endsection
