@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"><img class="img-fluid img-thumbnail" style="height: 65px; width: 50px" alt="" src="/img/Patient 3.png">Choose your Healthcare Provider</h3>
                        <div class="form-group ">
                            <small class="d-none"><span class="fa fa-info-circle text-info"></span> All personal data you input is confidential and be kept private</small>
                        </div>

                    <form method="POST" action="/register-user">
                        @csrf
                        <div class="form-group input-group border border-primary">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user-md"></i> </span>
                            </div>
                            <select class="form-control" name="providers" >
                                <option selected hidden disabled> Select Healthcare Provider</option>
                                <option>Makati Med</option>
                                <option>HMI Care</option>
                                <option>St. Lukes Med</option>
                            </select>
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend border border-primary">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                             </div>
                             <input id="fname" name="fname" class="form-control border-bottom border-primary" placeholder="First name" type="text" required>
                             <input id="mname" name="mname" class="form-control border-bottom border-primary" placeholder="Middle name" type="text" required>
                             <input id="lname" name="lname" class="form-control border-bottom border-primary" placeholder="Last name" type="text" required>
                        </div>
                        <div class="form-group input-group border border-primary">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                            </div>
                            <select class="custom-select" name="phone_code" style="max-width: 120px;">
                                <option selected="">+63</option>
                                <option value="1">+97</option>
                                <option value="2">+19</option>
                                <option value="3">+70</option>
                            </select>
                            <input name="phone_number" class="form-control" placeholder="Phone number" type="text">
                        </div>
                        <div class="form-group input-group{{ $errors->has('email') ? ' has-error' : '' }} border border-primary">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                             </div>
                            <!--<input class="form-control" name="email" placeholder="Email address" type="email">-->
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input class="form-control" name="password" placeholder="Create password" type="password" required>
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input class="form-control" placeholder="Repeat password" type="password" required>
                        </div> <!-- form-group// -->


                        <div class="form-group">
                            <button type="submit" class="btn btn-success"> Request Now  </button>
                        </div
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
