@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center">
    <div class="row  ">
        <div class="col-md-8 mt-3">

            <div class="card d-flex justify-content-center" style="width: 2.55in; height:4.25in" >
                <div class="title text-center mt-3">
                    <img src="/img/logo.png" class="img-thumbnail" style="width:60px; height:60px">

                </div>
                <div class="card-body text-center">
                    <div class="row p-3" >
                        {{-- <h3><b>Certificate of Vaccination</b></h3> --}}
                        @if ($status[0] == 'yes')
                            <label>This is to certify that the holder of this certificate has been successfully
                                Vaccinated against Coronovirus <b>COVID-19</b></label>
                                <div class="text-center col-12 mt-4">
                                    <h3 class="text-success text-center"><i class="fa fa-check text-success"></i>Verified</h3>
                                </div>
                            {{-- <small>Scan the QR below to verify status.</small> --}}
                        @else
                            <label>ActivePass is a digital vaccine passport for <b>COVID-19</b></label>
                            {{-- <small>Scan the QR below to verify status.</small> --}}
                            <h3 class="text-danger">Not Yet Vaccinated</h3>
                        @endif
                    </div>
                    <hr>
                </div>
                {{-- <button class="btn btn-success btn-sm">Send to your Email</button> --}}
                {{-- <button class="btn btn-info mt-1 btn-sm">Send OTP</button> --}}
                </div>
            </div>

        </div>
    </div>
</div>
<script>
        $('document').ready(function () {

            $('#wrapper').hide();
        });
</script>
@endsection
