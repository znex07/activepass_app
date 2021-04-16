@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center my-5">

    <div class="card" style="width: 50%">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Text</p>
            <div class="form-group">
                <label for="">Upload Government ID</label>
                <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
                <small id="fileHelpId" class="form-text text-muted">Upload ID</small>
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
@endsection
