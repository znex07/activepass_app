@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center mt-5">
        <div class="card d-flex justify-content-center" style="width: 2.55in; height:4.25in" >
            <div class="card-body">
                <div class="row p-3 text-center d-flex justify-content-center" >
                    <img src="/img/sign-check-icon.png" class="img-thumbnail rounded-circle" style="height: 70px; width:70px">
                    <h1 class="text-info">Hi {{ $request->fname }} !</h1>
                    <label>You have completed the Patient’s Registration!</label>
                    <p>Your information will be verified by our agents. Thank you.</p>
                </div>
                <hr>


            </div>
            <a class="btn btn-info mt-1 btn-sm" href="/home" >View my Dashboard</a>
        </div>
    </div>
</div>
@endsection
