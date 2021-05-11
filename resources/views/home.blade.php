@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="row  ">
        <div class="col-md-8 mt-3">

            <div class="card d-flex justify-content-center" style="width: 2.55in; height:4.25in" >
                <div class="card-body">
                    <div class="row p-3 text-center" >
                        <h4><b>Certificate of Vaccination</b></h4>
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
                            <div class="pull-left"><img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->gradient(0, 0, 51, 0, 102, 204, 'diagonal')->generate('https://life.segoviagroup.com/verify/' . Auth::user()->id)); !!}" class="img-thumbnail pull-right" style="height: 80px; width:80px"></div>
                            {{-- <div class="pull-left"><img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->gradient(73, 73, 255, 73, 73, 255, 'radial')->merge('/public/img/logo.png',.3)->generate('https://life.segoviagroup.com/verify/' . Auth::user()->id)); !!}" class="img-thumbnail pull-right" style="height: 80px; width:80px"></div> --}}
                        </div>

                    </div>
                    <div class="row text-center py-3">
                        <div class="col text-center">

                            <h5 class="text-center">Name: {{ Auth::user()->name }}</h5>
                        </div>

                    </div>
                </div>
                {{-- <button class="btn btn-success btn-sm">Send to your Email</button> --}}
                <a class="btn btn-info mt-1 btn-sm"  data-toggle="modal" data-target="#exampleModal">Vaccination Info</a>
                {{-- <a class="btn btn-success mt-1 btn-sm" href="/send_otp">Send One Time Pin</a> --}}
            </div>
        </div>
            {{-- <button class="btn btn-success btn-sm">Send to your Email</button> --}}
            {{-- <button class="btn btn-info mt-1 btn-sm">Send OTP</button> --}}
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center d-block">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="font-weight-bold ">COVID VACCINE PASSPORT</h3>
                    <img src="{{ Voyager::image(Auth::user()->avatar) }}" class="img-thumbnail " style="height: 70px; width:70px">
                </div>
                <div class="modal-body text-center">

                    <h5 class="modal-title" id="exampleModalLongTitle">Name: {{ Auth::user()->name }}</h5>
                    <h4 class="modal-title text-success" id="exampleModalLongTitle">First Dose</h4>
                    <h5 class="modal-title" id="exampleModalLongTitle">Vaccine Provider:</h5>
                    <h5 class="modal-title" id="exampleModalLongTitle">Doctor: </h5>
                    <h5 class="modal-title" id="exampleModalLongTitle">Vaccine Name: {{ Auth::user()->vaccine_brand }}</h5>
                    <h5 class="modal-title" id="exampleModalLongTitle">Date:{{ Carbon\Carbon::parse(Auth::user()->date_1)->format('Y-m-d') }}</h5>

                    <hr>
                    <h3 class="modal-title text-success" id="exampleModalLongTitle">Second Dose</h3>
                    <h5 class="modal-title" id="exampleModalLongTitle">Vaccine Name: {{ Auth::user()->vaccine_brand }}</h5>
                    <h5 class="modal-title" id="exampleModalLongTitle">Date:{{ Carbon\Carbon::parse(Auth::user()->date_1)->format('Y-m-d') }}</h5>
                    <hr>
                    <h2>Status: <label class="text-danger">{{ Auth::user()->is_vaccinated }}</label></h2>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <span class="fa fa-mobile fa-2x text-success mr-1"></span> <h5 class="modal-title" id="exampleModalLongTitle">  Report Side Effect</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-3">
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Date</label>

                    <div class='input-group col-md-8 date' id='datetimepicker1'>
                        <input type='date' class="form-control" name="date_1" value="<?php echo date('Y-m-d'); ?>"/>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                     </div>

            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="symp_1 col-md-4 ">
                    <div class="form-check">
                        <label for="">
                        <input class="form-check-input" type="checkbox" value="" id="">
                     Allergy
                   </label>
                    </div>
                    <div class="form-check">
                        <label for="">
                        <input class="form-check-input" type="checkbox" value="" id="">
                            Fever
                        </label>
                    </div>
                    <div class="form-check">
                        <label  for="">
                        <input class="form-check-input" type="checkbox" value="" id="">
                            Musscle Pain
                        </label>
                    </div>
                    <div class="form-check">
                        <label  for="">
                        <input class="form-check-input" type="checkbox" value="" id="">
                            Headache
                        </label>
                    </div>
                </div>
               <div class="symp_2 col-md-4">
                <div class="form-check">
                    <label  for="">
                    <input class="form-check-input" type="checkbox" value="" id="">
                        Allergy
                    </label>
                </div>
                <div class="form-check">
                    <label for="">
                    <input class="form-check-input" type="checkbox" value="" id="">
                        Chills
                    </label>
                </div>
                    <div class="form-check">
                      <label for="">
                      <input class="form-check-input" type="checkbox" value="" id="">
                        Nausea
                    </label>
                    </div>
                        <input type="text" class="form-control input-sm " placeholder="Others" name="" id="">
                    </div>
            </div>
            <hr>
            <div class="form-group text-center">
                How long did you experience these side effects?
                <div class="row d-flex justify-content-center">
                    <input class="form-control col-4" type="text" placeholder="Days" id="txt_d">
                    <input class="form-control col-4 ml-2" type="text" placeholder="Hours" id="txt_h">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Report now</button>
        </div>
        </div>
      </div>
    </div>
  </div>

        </div>
    </div>
</div>
<script>
    $('document').ready(function () {


         $('#txt_d').on('change', function () {
            var text = $('#txt_d');
            text.val(text.val() + ' Day(s)');
         });
         $('#txt_h').on('change', function () {
            var text = $('#txt_h');
            text.val(text.val() + ' Hour(s)');
         });

    });

</script>
@endsection
