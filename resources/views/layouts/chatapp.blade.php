<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ActivePass') }}</title>

    <!-- Styles -->
    <style>
        .chat {
          list-style: none;
          margin: 0;
          padding: 0;
        }

        .chat li {
          margin-bottom: 10px;
          padding-bottom: 5px;
          border-bottom: 1px dotted #B3A9A9;
        }

        .chat li .chat-body p {
          margin: 0;
          color: #777777;
        }

        .panel-body {
          overflow-y: scroll;
          height: 350px;
        }

        ::-webkit-scrollbar-track {
          -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
          background-color: #F5F5F5;
        }

        ::-webkit-scrollbar {
          width: 12px;
          background-color: #F5F5F5;
        }

        ::-webkit-scrollbar-thumb {
          -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
          background-color: #555;
        }
      </style>

    </head>
<body>
    <div id="app">
        <div class="se-pre-con"></div>
        <nav class="navbar fixed-top  navbar-expand-md navbar-light bg-light color-white shadow-sm">
            <div class="container">

                <button class="navbar-toggler d-block navbar-light" type="button"  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand pull-left" href="{{ url('/') }}">
                    <img src="{{asset('/img/sg-logo.png')}}" class="ball img-thumbnail card-img-top mx-1" style="height: 30px; width:30px">
                    <b>{{ config('app.name', 'FitPass') }}</b>
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class=" btn btn-light mx-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class=" btn btn-dark" href="register">{{ __('Register') }}</a>
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
            @guest
            @if (Route::has('login'))

            @endif
            @else
            <div class="d-flex" id="wrapper" style="margin-top:5px">
                <div class="bg-light border-right" id="sidebar-wrapper">
                    <div class="sidebar-heading d-flex justify-content-center" style="">
                        <div class="container">
                            <img class="row rounded-circle img-thumbnail" src="{{ asset('/img/'. Auth::user()->avatar )  }}" style="width: 80px; height: 80px">
                        <p class="row font-weight-bold mt-3" style="text-transform: capitalize;">Welcome,<br> {{ Auth::user()->fname . ' ' . Auth::user()->mname .' '. Auth::user()->lname }} !</p>
                        @if (Auth::user()->role_id == '1' )
                            <p class="row font-weight-bold mt-2"><a href="/admin/dashboard" class="btn btn-sm btn-dark">Admin Dashboard</a></p>
                        @endif
                    </div>
                </div>
                <div class="list-group list-group-flush">
                    {{-- <a href="home" class="list-group-item list-group-item-action bg-light"><i class="fa fa-dashboard text-success fa-lg"></i> Dashboard</a> --}}

                    {{-- {{-- <a href="search" class="list-group-item list-group-item-action bg-light"><i class="fa fa-search btn-success"></i> Search</a> --}}
                    <a href="/home" class="list-group-item list-group-item-action bg-light"><i class="fa fa-qrcode btn-success"></i> Access VaxPass</a>
                    <a href="/edit-personal" class="list-group-item list-group-item-action bg-light"><i class="fa fa-user-circle btn-success"></i> Edit Personal Info</a>
                    <a href="/upload-id" class="list-group-item list-group-item-action bg-light"><i class="fa fa-address-card btn-success"></i> Upload files</a>
                    {{-- <a href="immune_records" class="list-group-item list-group-item-action bg-light"><i class="fa fa-qrcode btn-success"></i> Immunization form</a> --}}
                    <a type="button" class="list-group-item list-group-item-action text-danger" data-toggle="modal" data-target="#exampleModalCenter">
                        <span class="fa fa-lg fa-warning" style="color: orange"></span> Report Side Effect
                    </a>

                    <a href="{{ route('logout') }}" class="list-group-item list-group-item-action bg-light" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fa fa-times-circle text-danger fa-lg"></i> Logout </a>
                        <form action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>

                @endguest
                <div id="page-content-wrapper">

                @yield('content')
        </main>
        <footer class="footer py-3 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; 2021 Segovia Development</p>
                <p class="m-0 text-center"><a href="/terms" >Terms and Condition</a></p>
            </div>
    </footer>
    </div>
    <script src="{{ asset('js/app.js') }}" ></script>

</body>
</html>
