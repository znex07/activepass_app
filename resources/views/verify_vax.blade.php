@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center">
    {{-- @if(session('message') == "Phone number verified") --}}
    <div class="row  ">
        {{-- <div class="col-md-8 mt-3">

            <div class="card d-flex justify-content-center" style="width: 2.55in; height:4.25in;" >
                <div class="title text-center mt-3">
                    <img src="{{ Voyager::image(Auth::user()->avatar) }}" class="img-thumbnail" style="height: 70px; width:70px">
                    <img src="/img/logo.png" class="img-thumbnail" style="width:60px; height:60px">

                </div>
                <div class="card-body text-center">
                    <div class="row p-3" >
                        <h3><b>Certificate of Vaccination</b></h3>
                        @foreach ($vaccine_status as $vax)
                        @if ($vax->is_vaccinated == 'Fully Vaccinated')
                            <label>This is to certify that the holder of this certificate has been Fully
                                Vaccinated against Coronavirus <b>COVID-19</b></label>
                                <div class="text-center col-12 mt-4">
                                    <h3 class="text-success text-center"><i class="fa fa-check text-success"></i>Verified</h3>
                                    <h5 class="text-center">Name: {{ $vax->name }}</h5>
                                    <h5 class="text-center">Vaccine: {{ $vax->vaccine_brand }}</h5>
                                    <small class="text-center">Date Vaccinated: {{ Carbon\Carbon::parse($vax->date_2)->format('Y-m-d') }}</small>
                                </div>
                        @else
                            <label>ActivePass digital vaccine passport for <b>COVID-19</b></label>
                            <h3 class="text-danger">Not Yet Vaccinated</h3>
                        @endif
                        @endforeach
                    </div>
                    <hr>
                </div>
                </div>
            </div>

        </div>
    </div> --}}



    <div class="card mt-5 ">
        <div class="card-header text-center" style="justify-content: center">
            <h3 class="card-title font-weight-bold ">COVID VACCINE PASSPORT</h3>
        </div>
        <div class="card-body">
                <p class="card-text">
                <h4 class="text-success" id="exampleModalLongTitle">First Dose</h4>
                <img src="{{ Voyager::image(Auth::user()->avatar) }}" class="img-thumbnail pull-right" style="height: 70px; width:70px">
                <h5 class="" id="exampleModalLongTitle">Vaccine Provider:</h5>
                <h5 class="" id="exampleModalLongTitle">Name: {{ Auth::user()->name }}</h5>
                <h5 class="" id="exampleModalLongTitle">Doctor: </h5>
                <h5 class="" id="exampleModalLongTitle">Vaccine Name: {{ Auth::user()->vaccine_brand }}</h5>
                <h5 class="" id="exampleModalLongTitle">Date:{{ Carbon\Carbon::parse(Auth::user()->date_1)->format('Y-m-d') }}</h5>

                <hr>
                <h3 class=" text-success" id="exampleModalLongTitle">Second Dose</h3>
                <h5 class="" id="exampleModalLongTitle">Vaccine Name: {{ Auth::user()->vaccine_brand }}</h5>
                <h5 class="" id="exampleModalLongTitle">Date:{{ Carbon\Carbon::parse(Auth::user()->date_1)->format('Y-m-d') }}</h5>
                <hr>
                <h2>Status: <label class="text-danger">{{ Auth::user()->is_vaccinated }}</label></h2>
                </p>
                {{-- <div class="card-footer">
                  <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Ok</button>
                </div> --}}
              </div>
            </div>

            </div>

    {{-- OTP --}}
    {{-- @else
    <div class="card mt-5">
        <div class="card-header">{{ __('Verify Your Phone Number') }}</div>
        <div class="card-body">
            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{session('error')}}
            </div>
            @endif
            {{session('name')}}
            Please enter the OTP sent to your number: {{session('verification_code')}}
            <form action="/admin/verify-otp" method="post">
                @csrf
                <div class="form-group row">
                    <label for="verification_code"
                        class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
                    <div class="col-md-6">
                        <input type="hidden" name="phone_number" value="{{Auth::user()->phone_number}}">
                        <input id="verification_code" type="tel"
                            class="form-control @error('verification_code') is-invalid @enderror"
                            name="verification_code" value="{{ old('verification_code') }}" required>
                        @error('verification_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Verify Phone Number') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}
    {{-- @endif --}}
</div>
<script>
        $('document').ready(function () {
            $('#wrapper').hide();
            // $('#myModal').modal('show');
        });
</script>
@endsection
