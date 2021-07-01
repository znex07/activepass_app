@extends('layouts.app')

@section('content')
Responsive

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4" style="padding-bottom:10%">
                <div class="card mt-5 " style="height:90% !important">
                    <div class="card-body">
                        <strong class="mr-auto"> <h4> Report side effects </h4> </strong>

                        <div class="mt-2 text-primary"> Feel free to message for any reports on the vaccine's side effects </div>

                        <div class="form-group row pt-4">

                            <div class="col-md-12">
                                <label for="name" class="col-form-label text-md-right">{{ __('Name') }} </label>

                                    <div class="form-group input-group">

                                        <div class="input-group-prepend">
    		                                <span class="input-group-text"> <i class="fa fa-user"> </i> </span>
    		                            </div>

                                            <input id="name" type="name" class="form-control" name="name" value="" placeholder="Enter your Name" required="">
                                    </div>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="Email" class="col-form-label text-md-right">{{ __('Email') }} </label>

                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                                    </div>

                                                    <input id="email" type="email" class="form-control" name="email" value="" placeholder="Enter your Email" required="">
                                                </div>

                                                     @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong> {{ $message }} </strong>
                                                        </span>
                                                    @enderror
                                                        <br>
                                                        <div class="mt-2 text-primary"> Message </div>
                                                                <textarea id="message" type="message" class="form-control" name="message" value="" placeholder="Text Message" required=""> </textarea>
                                                        </div>
                                                 </div>
                            </div>

                        </div>

                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong> {{ $message }} </strong>
                                        </span>
                                    @enderror
                    </div>
                              <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-block btn-primary">
                                                {{ __('SEND') }}
                                            </button>
                                        </div>
                                    </div>



@endsection
