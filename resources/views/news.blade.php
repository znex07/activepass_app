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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="https://bootswatch.com/4/lux/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('css/immune_record.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/activepass1.css') }}" rel="stylesheet">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script>
        $(window).load(function() {
            $(".se-pre-con").fadeOut("slow");;
            $(".navbar-toggler").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            });
        });
    </script>
    </head>
<body>
<div id="app">
        <div class="se-pre-con"></div>
        <nav class="navbar fixed-top  navbar-expand-md navbar-light bg-light color-white shadow-sm">
            <div class="container">

                {{-- <button class="navbar-toggler d-block navbar-light" type="button"  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
                <img src="{{asset('/img/plus.png')}}" class="ball img-thumbnail card-img-top mx-1" style="height: 30px; width:30px">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'ActivePass') }}
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"> <a href="/" class="nav-link"> HOME</a> </li>
                        <li class="nav-item"> <a href="/about" class="nav-link"> ABOUT</a> </li>
                        {{-- <li class="nav-item"> <a href="/contact" class="nav-link">CONTACT US</a> </li> --}}
                        <li class="nav-item"> <a href="/news" class="nav-link">NEWS</a> </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        <li class="nav-item active"> <a href="#" class="nav-link  "><span class="fa fa-phone"></span> TEL: 8-899-6356</a>  </li>
                        <li class="nav-item active"> <a href="#" class="nav-link  "><span class="fa fa-envelope"></span> Email: info@activepass.app</a> </li>
                        <li class="nav-item active"> <a href="/" class="nav-link btn btn-light d-none"> HOME</a> </li>
                        {{-- <li class="nav-item"> <a href="/about" class="nav-link btn btn-light "> ABOUT</a> </li>
                        <li class="nav-item"> <a href="/contact" class="nav-link btn btn-light ">CONTACT US</a> </li>
                        <li class="nav-item"> <a href="/news" class="nav-link btn btn-light ">NEWS</a> </li> --}}
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
                </div>
            </div>
        </nav>


<main class="py-5">
    <div class="container" style="margin-top: 20px">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card text-left " style="height: 100%">
                    <img class="card-img-top" src="/img/know-your-vaccine.jpg" alt=""  >
                    <div class="card-body" >
                      <h2 class="card-title font-weight-bold">ActivePass</h2>

                    </div>
                    <div class="card-footer">
                        <a href="/search_vax" class="btn btn-block  btn-success btn-md">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<footer class="footer footer-nav py-0 bg-dark">
    <div class="container text-center">
        <small class="m-0 text-center text-white">Copyright &copy; 2021 ActivePass <a href="/terms" class="nav-link">PRIVACY & TERMS</a></small>
    </div>
</footer>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $('document').ready(function () {

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

