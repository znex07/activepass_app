<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ActivePass | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/img/Preloader_11.gif" alt="" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

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
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">

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
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
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
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item d-none">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="/img/plus.png" alt="Activepass Logo" class="" style="opacity: .8">
      <span class="brand-text font-weight-bold">ACTIVEPASS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/img/{{Auth::user()->avatar}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->fname}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="home" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right d-none">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
<div class="container d-flex justify-content-center">
    <div class="row  ">
        <div class="col-md-8 mt-3">

            <div class="card d-flex justify-content-center" style="width: 2.55in; height:4.25in" >
                <div class="card-body">
                    <div class="row p-3 text-center" >
                        <h4><b>Certificate of Vaccination</b></h4>
                        {{-- <label>This is to certify that the holder of this certificate has been successfully Vaccinated against Coronovirus <b>COVID-19</b></label> --}}
                        <label>ActivePass is a digital vaccine passport for <b>COVID-19</b></label>
                        <small>Scan the QR below to verify status.</small>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('/img/'. Auth::user()->avatar )  }}" class="img-thumbnail pull-right" style="height: 70px; width:70px">
                        </div>
                        <div class="col ">
                            <div class="pull-left"><img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->gradient(0, 0, 51, 0, 102, 204, 'diagonal')->generate('https://life.segoviagroup.com/verify/' . Auth::user()->id)); !!}" class="img-thumbnail pull-right" style="height: 80px; width:80px"></div>
                            {{-- <div class="pull-left"><img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->gradient(73, 73, 255, 73, 73, 255, 'radial')->merge('/public/img/logo.png',.3)->generate('https://life.segoviagroup.com/verify/' . Auth::user()->id)); !!}" class="img-thumbnail pull-right" style="height: 80px; width:80px"></div> --}}
                        </div>

                    </div>
                    <div class="row text-center py-3">
                        <div class="col text-center">

                            {{-- <h5 class="text-center">Name: {{ Auth::user()->fname }}</h5> --}}
                        <h5 class="font-weight-bold text-center" style="text-transform: capitalize;"> {{ Auth::user()->fname . ' ' . Auth::user()->mname .' '. Auth::user()->lname }} </h5>

                        </div>

                    </div>
                </div>
                {{-- <button class="btn btn-success btn-sm">Send to your Email</button> --}}
                <a class="btn btn-info mt-1 btn-sm"  data-toggle="modal" data-target="#exampleModal">Vaccination Info</a>
                {{-- <a class="btn btn-success mt-1 btn-sm" href="/send_otp">Send One Time Pin</a> --}}
            </div>
        </div>
            {{-- <button class="btn btn-success btn-sm">Send to your Email</button> --}}
            {{-- <button class="btn btn-info mt-1 btn-sm">Send OTP</button> --}}
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center d-block">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="font-weight-bold ">COVID VACCINE PASSPORT</h3>
                    <img src="{{ asset('/img/'. Auth::user()->avatar )  }}" class="img-thumbnail " style="height: 70px; width:70px">
                </div>
                <div class="modal-body text-center">

                    <h3 class="modal-title font-weight-bold" id="exampleModalLongTitle" style="text-transform: capitalize;">Name: {{ Auth::user()->fname . ' ' . Auth::user()->mname .' '. Auth::user()->lname }}</h3>
                    <h4 class="modal-title text-success" id="exampleModalLongTitle">First Dose</h4>
                    <h5 class="modal-title" id="exampleModalLongTitle">Vaccine Provider:</h5>
                    <h5 class="modal-title" id="exampleModalLongTitle">Doctor: </h5>
                    <h5 class="modal-title" id="exampleModalLongTitle">Vaccine Name: {{ Auth::user()->vaccine_brand }}</h5>
                    <h5 class="modal-title" id="exampleModalLongTitle">Date: {{ Carbon\Carbon::parse(Auth::user()->date_1)->formatLocalized('%B %d, %Y') }}</h5>

                    <hr>
                    <h3 class="modal-title text-success" id="exampleModalLongTitle">Second Dose</h3>
                    <h5 class="modal-title" id="exampleModalLongTitle">Date: {{ Carbon\Carbon::parse(Auth::user()->date_2)->formatLocalized('%B %d, %Y') }}</h5>
                    <hr>
                    <h2>Status: <label class="text-danger">{{ Auth::user()->is_vaccinated }}</label></h2>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Close</button>
                </div>
              </div>
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
           <form action="/report/sideeffect" method="post">
            @csrf
               <div class="form-group row">
                   <label class="col-md-2 col-form-label text-md-right">Date</label>

                   <div class='input-group col-md-8 date' id='datetimepicker1'>
                       <input type='date' class="form-control" name="date_1" value="<?php echo date('Y-m-d'); ?>"/>
                       <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>

                </div>
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}" >
                <hr>
                <div class="row d-flex justify-content-center">
                    <div class="symp_1 col-md-4 ">
                        <div class="form-check">
                            <label for="">
                                <input name="allergy" class="form-check-input" type="checkbox" value="allergy" id="">
                                Allergy
                            </label>
                        </div>
                        <div class="form-check">
                            <label for="">
                                <input name="fever" class="form-check-input" type="checkbox" value="fever" id="">
                                Fever
                            </label>
                        </div>
                        <div class="form-check">
                            <label  for="">
                        <input name="muscle_pain" class="form-check-input" type="checkbox" value="muscle_pain" id="">
                        Muscle Pain
                    </label>
                </div>
                <div class="form-check">
                    <label  for="">
                        <input name="headache" class="form-check-input" type="checkbox" value="headache" id="">
                        Headache
                    </label>
                </div>
            </div>
            <div class="symp_2 col-md-4">
                <div class="form-check">
                    <label for="">
                        <input name="chills" class="form-check-input" type="checkbox" value="chills" id="">
                        Chills
                    </label>
                </div>
                <div class="form-check">
                      <label for="">
                          <input name="nausea" class="form-check-input" type="checkbox" value="nausea" id="">
                          Nausea
                        </label>
                    </div>
                    <input name="others" type="text" class="form-control input-sm " placeholder="Others" value="" id="">
                </div>
            </div>
            <hr>
            <div class="form-group text-center">
                How long did you experience these side effects?
                <div class="row d-flex justify-content-center">
                    <input name="days" value="" class="form-control col-4" type="text" placeholder="Days" id="txt_d">
                    <input name="hours" value="" class="form-control col-4 ml-2" type="text" placeholder="Hours" id="txt_h">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Report now</button>
        </div>
    </form>
    </div>
</div>
</div>
</div>

</div>
    </div>
</div>

 </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  <div class="container text-center">
            <small class="m-0 text-center">
            Copyright &copy; 2021 Segovia Development <a href="/terms" class="d-none">PRIVACY & TERMS</a></small>
    </div>

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="{{ asset('js/app.js') }}" ></script>
<!-- jQuery -->
{{-- <script src="plugins/jquery/jquery.min.js"></script> --}}
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
{{-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
<!-- ChartJS -->
{{-- <script src="plugins/chart.js/Chart.min.js"></script> --}}
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
{{-- <script src="dist/js/adminlte.js"></script> --}}
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

</body>
</html>

