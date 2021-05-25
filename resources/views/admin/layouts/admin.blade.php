<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin | Dashboard</title>

  <!-- Font Awesome Icons -->
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery.steps.css') }}">

  <!-- Google Font: Source Sans Pro -->
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
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
                @foreach ($side_effects as $side_ef)
                    {{ $side_ef->fname }}
                @endforeach
              <img src="{{ asset('/img/default.png') }}" alt="User Avatar" style="height: 30px; width: 30px" class=" mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  NAME
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>

          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
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
        <div class="image">
          <img src="{{ asset('/img/default.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin/profile/{{Auth::user()->id}}" class="d-block" style="text-transform: capitalize"> {{Auth::user()->fname}} {{Auth::user()->lname}} </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link {{ 'admin/dashboard' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview {{ 'admin/viewusers' == request()->path() || 'admin/addpatient' == request()->path() ? 'menu-open' : '' }}">
            <a href="" class="nav-link {{ 'admin/viewusers' == request()->path() || 'admin/addpatient' == request()->path()  || 'admin/profile' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
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
                <li class="nav-item">
                  <a href="/admin/addpatient" class="nav-link {{ 'admin/addpatient' == request()->path() ? 'active' : '' }}">
                    <i class="fa fa-user-plus nav-icon"></i>
                    <p>Add new User</p>
                  </a>
                </li>
                <li class="nav-item ">
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
          <li class="nav-item ">
            <a href="/admin/clinic" class="nav-link {{ 'admin/clinic' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fa fa-clinic-medical"></i>
              <p>
                Clinic Management
                {{-- <span class="right badge badge-danger">New</span> --}}

              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="/admin/customercare" class="nav-link {{ 'admin/customercare' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fa fa-hand-holding-medical"></i>
              <p>
                Customer Care
                {{-- <span class="right badge badge-danger">New</span> --}}

              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="/admin/messages" class="nav-link {{ 'admin/messages' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Messages
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
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- AdminLTE -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<!-- OPTIONAL SCRIPTS -->
{{-- <script src="{{ asset('js/chart.js') }}"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js" integrity="sha512-AJUWwfMxFuQLv1iPZOTZX0N/jTCIrLxyZjTRKQostNU71MzZTEPHjajSK20Kj1TwJELpP7gl+ShXw5brpnKwEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

<script src="{{ asset('js/app.js') }}" ></script>
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
            // rowReorder: {selector: 'td:nth-child(3)'},
            responsive: true,
            columnDefs: [
                { responsivePriority: 1, targets: 0 },
		            { responsivePriority: 2, targets: 5 }
            ],
        });
    });
</script>
</body>
