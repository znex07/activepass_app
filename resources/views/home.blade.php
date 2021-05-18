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
                            <img src="{{ asset('/img/'. Auth::user()->avatar )  }}" class="img-thumbnail pull-right" style="height: 70px; width:70px">
                        </div>
                        <div class="col ">
                            <div class="pull-left"><img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->gradient(0, 0, 51, 0, 102, 204, 'diagonal')->generate('https://life.segoviagroup.com/verify/' . Auth::user()->id)); !!}" class="img-thumbnail pull-right" style="height: 80px; width:80px"></div>
                            {{-- <div class="pull-left"><img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->gradient(73, 73, 255, 73, 73, 255, 'radial')->merge('/public/img/logo.png',.3)->generate('https://life.segoviagroup.com/verify/' . Auth::user()->id)); !!}" class="img-thumbnail pull-right" style="height: 80px; width:80px"></div> --}}
                        </div>

                    </div>
                    <div class="row text-center py-3">
                        <div class="col text-center">

                            {{-- <h5 class="text-center">Name: {{ Auth::user()->fname }}</h5> --}}
                        <h5 class="font-weight-bold text-center" style="text-transform: capitalize;"> {{ Auth::user()->fname . ' ' . Auth::user()->mname .' '. Auth::user()->lname }} </h5>

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
                    <img src="{{ asset('/img/'. Auth::user()->avatar )  }}" class="img-thumbnail " style="height: 70px; width:70px">
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
           <form action="/report/sideeffect" method="post">
            @csrf
               <div class="form-group row">
                   <label class="col-md-2 col-form-label text-md-right">Date</label>

                   <div class='input-group col-md-8 date' id='datetimepicker1'>
                       <input type='date' class="form-control" name="date_1" value="<?php echo date('Y-m-d'); ?>"/>
                       <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>

                </div>
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}" >
                <hr>
                <div class="row d-flex justify-content-center">
                    <div class="symp_1 col-md-4 ">
                        <div class="form-check">
                            <label for="">
                                <input name="allergy" class="form-check-input" type="checkbox" value="allergy" id="">
                                Allergy
                            </label>
                        </div>
                        <div class="form-check">
                            <label for="">
                                <input name="fever" class="form-check-input" type="checkbox" value="fever" id="">
                                Fever
                            </label>
                        </div>
                        <div class="form-check">
                            <label  for="">
                        <input name="muscle_pain" class="form-check-input" type="checkbox" value="muscle_pain" id="">
                        Muscle Pain
                    </label>
                </div>
                <div class="form-check">
                    <label  for="">
                        <input name="headache" class="form-check-input" type="checkbox" value="headache" id="">
                        Headache
                    </label>
                </div>
            </div>
            <div class="symp_2 col-md-4">
                <div class="form-check">
                    <label for="">
                        <input name="chills" class="form-check-input" type="checkbox" value="chills" id="">
                        Chills
                    </label>
                </div>
                <div class="form-check">
                      <label for="">
                          <input name="nausea" class="form-check-input" type="checkbox" value="nausea" id="">
                          Nausea
                        </label>
                    </div>
                    <input name="others" type="text" class="form-control input-sm " placeholder="Others" value="" id="">
                </div>
            </div>
            <hr>
            <div class="form-group text-center">
                How long did you experience these side effects?
                <div class="row d-flex justify-content-center">
                    <input name="days" value="" class="form-control col-4" type="text" placeholder="Days" id="txt_d">
                    <input name="hours" value="" class="form-control col-4 ml-2" type="text" placeholder="Hours" id="txt_h">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Report now</button>
        </div>
    </form>
    </div>
</div>
</div>
</div>

</div>
    </div>
</div>

@endsection
