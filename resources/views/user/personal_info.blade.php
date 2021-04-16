@extends('layouts.app')

@section('css')
    <style>
        .user-email {
            font-size: .85rem;
            margin-bottom: 1.5em;
        }
    </style>
@stop

@section('content')

    <div style=" width:70%" class="container py-5 d-flex justify-content-center">

        <div style="position:relative; text-align:center;">
            <img src="@if( !filter_var(Auth::user()->avatar, FILTER_VALIDATE_URL)){{ Voyager::image( Auth::user()->avatar ) }}@else{{ Auth::user()->avatar }}@endif"
            class="avatar"
            style="border-radius:50%; width:80px; height:80px; border:5px solid #fff;"
            alt="{{ Auth::user()->name }} avatar">
            <h4>{{ ucwords(Auth::user()->name) }}</h4>
            <div class="user-email text-muted">{{ ucwords(Auth::user()->email) }}</div>
            <p>{{ Auth::user()->bio }}</p>
            <form action="/" method="post">
                <div class="text-center" role="">
                    <h3 class="text-success "><span class="voyager-person"></span>BASIC INFORMATION</h3>
                </div>
                <hr>
                <div class="form-group">
                    <h3 class="font-weight-bold text-lg">{{ Auth::user()->name }}</h3>
                </div>

                <div class="form-group">
                    <h3 class="font-weight-bold" for="bday">Birthday</h3>
                    <input type='date' class="form-control" name="bday" value="{{ old('bday', Carbon\Carbon::parse(Auth::user()->date_2)->format('Y-m-d') ?? '') }}"/>
                </div>
                <div class="form-group">
                    <h3 class="font-weight-bold" for="bday">Address</h3>
                    {{-- <input type='text' class="form-control" name="address" value="{{ old('address', 'address') }}"/> --}}
                    <textarea class="form-control" name="address" id="" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <h3 class="font-weight-bold" for="email">{{ __('voyager::generic.email') }}</h3>
                    <input type="email" class="form-control" id="email" name="email" placeholder="{{ __('voyager::generic.email') }}"
                    value="{{ old('email', Auth::user()->email ?? '') }}">
                </div>

                <div class="form-group">
                    <h3 class="font-weight-bold" for="password">{{ __('voyager::generic.password') }}</h3>
                    @if(isset(Auth::user()->password))
                    <br>
                    <small>{{ __('voyager::profile.password_hint') }}</small>
                    @endif
                    <input type="password" class="form-control" id="password" name="password" value="" autocomplete="new-password">
                </div>
                <div class="form-group ">
                    <h3 for="phone_number">{{ __('Phone Number') }}</h3>
                    <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                    value="{{ old('phone_number', Auth::user()->phone_number ?? '') }}" required>
                    @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button class="btn btn-info btn-block">Save</button>
            </form>
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
        @stop
