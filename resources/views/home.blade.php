@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="row  ">
        <div class="col-md-8 mt-3">

            <div class="card d-flex justify-content-center" style="width: 2.55in; height:4.25in" >
                <div class="card-body">
                    <div class="row p-3 text-center" >
                        <h2><b>Certificate of Vaccination</b></h2>
                        {{-- <label>This is to certify that the holder of this certificate has been successfully Vaccinated against Coronovirus <b>COVID-19</b></label> --}}
                        <label>ActivePass is a digital vaccine passport for <b>COVID-19</b></label>
                        <small>Scan the QR below to verify status.</small>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <img src="{{ Voyager::image(Auth::user()->avatar) }}" class="img-thumbnail pull-right" style="height: 70px; width:70px">
                        </div>
                        <div class="col ">
                            <div class="pull-left">{!! QrCode::size(70)->generate('https://life.segoviagroup.com/verify/' . Auth::user()->id); !!}</div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success btn-sm">Send to your Email</button>
                <button class="btn btn-info mt-1 btn-sm">Send OTP</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
