@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" style="max-width:900px; max-height:400px !important;">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/img/vaccine3.jpg')}}">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/img/vaccine2.jpg')}}" >
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/img/vaccine.jpg')}}">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                <div class="card-body">
                    <h4 class="card-title font-weight-bold">FitPass</h4>
                    <p class="card-text">As immunization is delivered in massive quantities, there is need for secure online platforms which facilitate
                        verification and issuance of online vaccination admin certificates (VACs) by the vaccine immunization providers (VIPs.)</p>
                        <p>Many establishments, primarily transport carriers, restaurants, schools, hospitals, churches, and event venues will adopt
                            safety protocols that may require online verification of VACs.</p>
                        <p><b class="card-text">FitPass</b> is a secure private online platform which will be used by vaccine immunization providers -- doctors, clinics,
                            hospitals, to allow their patients 24/7 access to vaccination admin certificates.  </p>

                </div>
                <div class="card-body">
                    {{-- <a href="/verify" class="card-link btn btn-success">Verify Vaccine Certificate now!</a>
                    <a href="#" class="card-link btn btn-info">FAQ & more Info</a> --}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <p class="font-weight-bold card-text"></h5></p>

                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center active">
                        Benefits of the Fitpass vaccine certificate to holders
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Your vaccine passport is available online 24/7
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        You can use it as an alternate ID
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Accompanying QR code can be scanned to register entry or attendance.
                    </li>
                </ul>

                <div class="list-group my-2">
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary active">Benefits to vaccine providers</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary disabled">Fitpass database serves as your backup medical record for covid immunization</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary disabled">Your patients will appreciate the convenience of accessing their vaccination record online 24/7</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary disabled">You can continue linkage with patients online thru the Fitpass help desk</a>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <button href="/verify" class="card-link btn btn-warning btn-block">Verify Vaccine Certificate now!</button>
                        </div>

                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <a href="#" class="card-link btn btn-info btn-block">FAQ & more Info</a>

                        </div>
                    </div>
                </div>

        </div>
    </div>


</div>
@endsection


