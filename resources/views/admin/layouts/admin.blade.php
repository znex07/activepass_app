<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin | Dashboard</title>

  <!-- Font Awesome Icons -->
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery.steps.css') }}">

  <!-- Google Font: Source Sans Pro -->
  <script src="{{ asset('js/app.js') }}" ></script>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>


</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block ">
        <a href="#" class="d-none nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3 d-none">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto ">

      <li class="nav-item">

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
          <div class="user-panel d-flex">
            <div class="image">
              <img src="/img/{{ Auth::user()->avatar }}" class="rounded-circle img-thumbnail" alt="User Image">
            </div>
        </div>
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

      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-light elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('/img/plus.png') }}" alt="" class="brand-image"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
          Master Dashboard
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="/patients" class="nav-link {{ 'admin/viewusers' == request()->path() ? 'active' : '' }}">
              <img src="/img/pnt.png" alt="" sizes="15" srcset="">
              <p>View Users</p>
            </a>
          </li>
          <li class="nav-item d-none">
                <a href="/admin/clinic" class="nav-link {{ 'admin/clinic' == request()->path() ? 'active' : '' }}">
            <img src="/img/hp.png" alt="" sizes="15" srcset="">
              <p>
                Healthcare Partners
              </p>
            </a>
          </li>
          <li class="d-none nav-item {{ 'admin/patients' == request()->path() || 'admin/patients' == request()->path() ? 'menu-open' : '' }}">
            <a href="" class="nav-link {{ 'admin/patients' == request()->path() || 'admin/patients' == request()->path()  || 'admin/profile' == request()->path() ? 'active' : '' }}">
              <p>
                Users
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/admin/viewusers" class="nav-link {{ 'admin/viewusers' == request()->path() ? 'active' : '' }}">
                    <i class="fa fa-users nav-icon"></i>
                    <p>View Users</p>
                  </a>
                </li>
                <li class="nav-item d-none">
                  <a href="/admin/addpatient" class="nav-link {{ 'admin/addpatient' == request()->path() ? 'active' : '' }}">
                    <i class="fa fa-user-plus nav-icon"></i>
                    <p>Add new User</p>
                  </a>
                </li>
                <li class="nav-item d-none">
                    <a href="/admin/patient/request" class="nav-link {{ 'admin/patient/request' == request()->path() ? 'active' : '' }}">
                      <i class="nav-icon fa fa-laptop-medical"></i>
                      <p>
                        Patient Request
                        {{-- <span class="right badge badge-danger">New</span> --}}

                      </p>
                    </a>
                  </li>
            </ul>
          </li>
          <li class="nav-item d-none">
            <a href="/admin/clinic" class="nav-link {{ 'admin/clinic' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fa fa-clinic-medical"></i>
              <p>
                Clinic Management
                {{-- <span class="right badge badge-danger">New</span> --}}

              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="/customercare" class="nav-link {{ 'admin/customercare' == request()->path() ? 'active' : '' }}">
              <img src="/img/cc.png" alt="" sizes="15" srcset="">
              <p>
                Customer Care
                {{-- <span class="right badge badge-danger">New</span> --}}

              </p>
            </a>
          </li>
          <li class="nav-item d-none">
            <a href="/admin/messages" class="nav-link {{ 'admin/messages' == request()->path() ? 'active' : '' }}">
              <img src="/img/analytics.png" alt="" sizes="15" srcset="">

              <p>
                Analytics
                <span class="right badge badge-danger">New</span>

              </p>
            </a>
          </li>
          <li class="nav-item d-none">
            <a href="/admin/calendar" class="nav-link {{ 'admin/calendar' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Calendar
                {{-- <span class="right badge badge-danger">New</span> --}}

              </p>
            </a>
          </li>
          <li class="nav-item d-none">
            <a href="/admin/docs" class="nav-link {{ 'admin/docs' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Documentation
                {{-- <span class="right badge badge-danger">New</span> --}}

              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


    <div class="container-fluid">

        @yield('content')

    </div>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="container text-center">
            <small class="m-0 text-center">
            Copyright &copy; 2021 Activepass <a href="/terms" class="d-none">PRIVACY & TERMS</a></small>
    </div>
  </footer>
{{-- scripts --}}
<script src="{{ asset('js/lifepass.js') }}"></script>
<script src="/dist/chart.js/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js" defer></script>
<script src="{{ asset('/js/admindash.js') }}"></script>
<script src="{{ asset('js/jquery.steps.min.js') }}"></script>
<script>
    $(document).ready(function() {

        $('#users_table').DataTable({
            responsive: true,
            order: [],
            columnDefs: [
                { responsivePriority: 1, targets: 0 },
		        { responsivePriority: 2, targets: 5 }
            ],
        });
        $("#btn-save").on('click',function(e) {
            e.preventDefault();
            console.log("save");
            // $("#saving").removeClass("fa fa-save").addClass("spinner-border spinner-border-sm");
            $.ajax(
                {
                    url: "/save_vax",
                    method: "POST",
                    success: function(data){
                        console.log(data);
                    }
                }
            )

        });
    });
</script>
</body>
