<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ActivePass') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/lifepass.js') }}" type="module" defer></script> --}}

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <link href="/css/simple-sidebar.css" rel="stylesheet">

    <!-- Styles -->
    <link href="https://bootswatch.com/5/quartz/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

    </head>
<body>
<div id="app">
        <div class="se-pre-con"></div>
<nav class="navbar fixed-top  navbar-expand-md navbar-dark bg-dark shadow-sm">

<div class="container">

    <img src="https://activepass.app/img/plus.png" class="border rounded navbar-toggler-right align-self-center mx-1" style="height: 30px; width:30px">
    <a class="navbar-brand" href="https://activepass.app">
        ACTIVEPASS
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item d-none">
                <a class=" btn btn-light mx-2 " href="https://activepass.app/login">LOGIN</a>
            </li>

            <li class="nav-item d-none">
                <a class=" btn btn-dark" href="register">REGISTER</a>
            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"> <a href="/" class="nav-link"> HOME</a> </li>
            <li class="nav-item">
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Vaccination Providers
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="left: 0px; right: inherit;">
                  <a class="dropdown-item text-dark" href="/register">Register as new VP </a>
                  <a class="dropdown-item text-dark" href="/users">Go to VP Dashboard</a>
                </div>
              </div>
            </li>
              <li class="nav-item">
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Patient Dashboard
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item text-dark" href="home">See Vax Certificate </a>
                  <a class="dropdown-item text-dark" href="#">Report Adverse Events </a>
                </div>
              </div>
            </li>
            <li class="nav-item"> <a href="/news" class="nav-link">About Covid Vaccines</a> </li>
        </ul>

    </div>
</div>

</nav>

<main class="py-5 px-1">
    <div class="container bg-light text-dark py-3 rounded mt-2" >
        <div class="row justify-content-center" >
                <div class="col-md-6 px-3">
                    <h3 class="mt-1">ActivePass supports COVID-19 vaccinations.</h3>
                    <ul>
                        <li style="padding-top: 20px !important; padding-bottom: 20px !important;"> Vaccination providers (VPs) can create a private cloud-based database of patients innoculated, track status and see reports. </li>

                        <li style="padding-top: 20px !important; padding-bottom: 20px !important;"> Patients can check dates for second and booster jabs, see their vax certificate, and submit adverse event reports. </li>

                        <li style="padding-top: 20px !important; padding-bottom: 20px !important;"> VPs and Patients can chat or message each other.</li>

                    </ul>
                    <a href="register" type="button" class="btn border-success btn-md bg-dark"><i class="fa fa-user text-success"></i> Be a Vaccination Provider</a>
                    <a href="home" type="button" class="btn border-success btn-md bg-dark"><i class="fa fa-qrcode text-success"></i> View certificate</a>
                </div>

                <div class="col-md-6">
                    <img src="/img/slider3.png" alt="" class="img-fluid" />
                </div>

        </div>
    </div>
</main>


<footer class="footer bg-dark">

    <img src="https://activepass.app/img/plus.png" >
    Copyright &copy; 2021 ACTIVEPASS <a href="/terms" class="nav-link d-none">PRIVACY & TERMS</a></small>
</footer>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>

