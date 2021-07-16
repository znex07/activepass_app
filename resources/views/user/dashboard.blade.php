@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content" >
        <!-- Main row -->
        <div class="row d-flex justify-content-center">
          <!-- Left col -->
          <section class="col connectedSortable">
            <div class="card d-flex justify-content-center" style="width: 3.55in; height:4.25in" >
                <div class="card-header text-center">
                    <h3 class="card-title">
                        <h4><b>Certificate of Vaccination</b></h4>

                </div>
                <div class="card-body">
                    <div class="row text-center" >
                        <label>ActivePass is a digital vaccine certification for <b>COVID-19</b></label>
                        <small>Scan the QR below to verify status.</small>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('/img/'. Auth::user()->avatar )  }}" class="img-thumbnail pull-right" style="height: 70px; width:70px">
                        </div>
                        <div class="col ">
                            <div class="pull-left"><img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->gradient(0, 0, 51, 0, 102, 204, 'diagonal')->generate('https://life.segoviagroup.com/verify/' . Auth::user()->id)); !!}" class="img-thumbnail pull-right" style="height: 80px; width:80px"></div>
                        </div>

                    </div>
                    <div class="row text-center py-3">
                        <div class="col text-center">

                     <h5 class="font-weight-bold text-center" style="text-transform: capitalize;"> {{ Auth::user()->fname . ' ' . Auth::user()->mname .' '. Auth::user()->lname }} </h5>

                        </div>

                    </div>
                </div>
                <a class="btn btn-info mt-1 btn-sm"  data-toggle="modal" data-target="#userModal">Vaccination Info</a>
                <a class="btn btn-success mt-1 btn-sm"  data-toggle="modal" data-target="#reportModal"><i class="nav-icon fas fa-flag"></i> Report Adverse Events</a>

            </div>
            <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header d-block">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="row">
                              <div class="col">
                                  <img src="{{ asset('/img/'. Auth::user()->avatar )  }}" class="img-thumbnail " style="height: 70px; width:70px">
                                  <label class="" id="exampleModalLongTitle" style="text-transform: capitalize;">Name: {{ Auth::user()->fname . ' ' . Auth::user()->mname .' '. Auth::user()->lname }}</label>
                              </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <table class="table table-border">
                          <tr class="col-md-6 table-primary">
                            <th>Doctor:               </th>
                            <th>Date:                 </th>
                            <th>Lot number:         </th>
                            <th>Status:           </th>
                          </tr>

                          <tr>
                            <td class="text-success">First Dose</td>
                            <td>{{ Carbon\Carbon::parse(Auth::user()->date_1)->format('d, M Y') }}</td>
                            <td>3434242</td>
                            <td>Pending</td>
                          </tr>
                          <tr>
                            <td class="text-success">Second Dose</td>
                            <td>{{ Carbon\Carbon::parse(Auth::user()->date_2)->format('d, M Y') }}</td>
                            <td>3434242</td>
                            <td>Pending</td>
                          </tr>
                          <tr>
                            <td>Vaccine Provider:</td>
                          </tr>


                    </table>
                        </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
