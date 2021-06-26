<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ActivePass') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <link href="/css/simple-sidebar.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/immune_record.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/activepass1.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>

    <script>
        $(window).load(function() {
            $(".se-pre-con").fadeOut("slow");
            $(".navbar-toggler").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            });
        });

    </script>
      <link rel="stylesheet" href="{{ asset('css/jquery.steps.css') }}">
      <style>
          label.error
            {
            width: 250px;
            display: block;
            float: left;
            color: red;
            padding-left: 10px;
            }
      </style>

    </head>
<body>
<div id="app">
        <div class="se-pre-con"></div>
        <nav class="navbar fixed-top  navbar-expand-md navbar-light bg-light color-white shadow-sm">

            <div class="container">

                <img src="{{asset('/img/plus.png')}}" class="navbar-toggler-right align-self-center mx-1" style="height: 30px; width:30px">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'ActivePass') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse flex-column" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item active"> <a href="#" class="nav-link  "><span class="fa fa-phone"></span> TEL: 8-899-6356</a>  </li>
                        <li class="nav-item active"> <a href="#" class="nav-link  "><span class="fa fa-envelope"></span> Email: info@activepass.app</a> </li>
                        <li class="nav-item active"> <a href="/" class="nav-link btn btn-light d-none"> HOME</a> </li>

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item d-none">
                                    <a class=" btn btn-light mx-2 " href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item d-none">
                                    <a class=" btn btn-dark" href="register">{{ __('REGISTER') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/home">
                                        Dashboard
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"> <a href="/" class="nav-link"> HOME</a> </li>
                        <li class="nav-item mx-1">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Vaccination Providers
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="reg_health_partner">Register as new VP </a>
                              <a class="dropdown-item" href="#">Go to VP Dashboard</a>
                            </div>
                          </div>
                        </li>
                          <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Patient Dashboard
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="home">See Vax Certificate </a>
                              <a class="dropdown-item" href="#">Report Adverse Events </a>
                            </div>
                          </div>
                        </li>
                        <li class="nav-item"> <a href="/vacc_info" class="nav-link">About Covid Vaccines</a> </li>
                    </ul>

                </div>
            </div>

            </div>
        </nav>


<main class="py-5">
    <div class="container" style="padding: 5%; margin-top:30px">
        @yield('content')

    </div>
</main>



<footer class="footer footer-nav d-none" style="background:#F1F1F1 !important">
    <div class="container">
        <div class="row">

        <img src="{{asset('/img/plus.png')}}" class="img-thumbnail" style="height: 30px; width:30px">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'ActivePass') }}
        </a>
        </div>
        <div class="row">

            <small class="">Copyright &copy; 2021 ACTIVEPASS <a href="/terms" class="nav-link d-none">PRIVACY & TERMS</a></small>
        </div>
    </div>
</footer>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery.steps.min.js') }}"></script>

<script>

    $('document').ready(function () {

        function adjustIframeHeight() {
            var $body   = $('body'),
                $iframe = $body.data('iframe.fv');
            if ($iframe) {
                // Adjust the height of iframe
                $iframe.height($body.height());
            }
        }
        $("#health-reg").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "fade",
            autoFocus: true,
            saveState: true,
		    onStepChanged: function(e, currentIndex, priorIndex) {
                // You don't need to care about it
                // It is for the specific demo
                adjustIframeHeight();
            },
            onStepChanging: function (event, currentIndex, newIndex) {
                var business_name = $('#business_name').val();
                var business_type = $("input:radio[name='business_type']:checked").val();
                var address = $('#in_postal').val() +' '+ $('#in_building').val() +' '+ $('#in_apartment').val() +' '+ $('#in_brgy').val() +' '+ $('#province').val() +' '+ $('#city').val();
                var tel = $('#in_tel').val();
                var cp = $('#in_cp').val();
                var email = $('#in_comp_email').val();
                var name1 = $('#in_name1').val();
                var name2 = $('#in_name2').val();
                var gender = $("input:radio[name='gender1']:checked").val();
                $('#conf_business_name').text(business_name);
                $('#conf_business_type').text(business_type);
                $('#conf_c_address').text(address);
                return true;
            },
            onFinished: function(){
                $("#provider-new").submit();
            }
        });

        var lastScrollTop = 0;
        $(window).scroll(function(event){
            var st = $(this).scrollTop();
            if (st > lastScrollTop){
                $(".footer").fadeIn();
                $(".navbar").slideUp();
            } else {
                $(".footer").fadeOut();
                $(".navbar").slideDown();
            }
            lastScrollTop = st;
        });
    });
</script>
</html>

