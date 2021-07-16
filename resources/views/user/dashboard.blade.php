{{--<!DOCTYPE html>
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
      <li class="nav-item d-none d-sm-inline-block ">
        <a href="#" class="nav-link d-none">Contact</a>
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

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>

        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link"  data-toggle="modal" data-target="#reportModal">
                <i class="nav-icon fas fa-flag"></i>
                <p>
                   Report Side Effect
                </p>
              </a>

            </li>

          </ul>
         @if (Auth::user()->role_id == '1')
        <ul class="nav nav-pills nav-sidebar flex-column">

          <li class="nav-item menu-open">

              <p>

                <a href="/admin/dashboard" class="nav-link active"><i class="nav-icon fas fa-user-cog"></i>Admin Dashboard</a>
                </p>

          </li>
          </ul>
        @endif
        <ul class="nav nav-pills nav-sidebar flex-column">

            <li class="nav-item menu-open">

                <p>
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out-alt text-danger fa-lg"></i> Logout </a>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST" class="d-none">
                        @csrf
                    </form>
                </p>

            </li>
            </ul>
        </nav>


      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper " style="background-color: #3333">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right d-none">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content d-flex justify-content-center" >
      <div class="container-fluid d-flex justify-content-center">
        <!-- Small boxes (Stat box) -->
        <div class="row d-none">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>VaxPass</h3>

                <p>VaxPass</p>
              </div>
              <div class="icon">
                <i class="ion ion-qr-scanner"></i>
              </div>
              <a href="/view-vax" class="small-box-footer">View your VaxPass <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>

                <p>Messages</p>
              </div>
              <div class="icon">
                <i class="ion ion-email"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row d-flex justify-content-center">
          <!-- Left col -->
          <section class="col connectedSortable">
            <div class="card d-flex justify-content-center" style="width: 2.55in; height:4.25in" >
                <div class="card-header text-center">
                    <h3 class="card-title">
                        <h4><b>Certificate of Vaccination</b></h4>

                </div>
                <div class="card-body">
                    <div class="row text-center" >
                        <label>ActivePass is a digital vaccine certification for <b>COVID-19</b></label>
                        <small>Scan the QR below to verify status.</small>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('/img/'. Auth::user()->avatar )  }}" class="img-thumbnail pull-right" style="height: 70px; width:70px">
                        </div>
                        <div class="col ">
                            <div class="pull-left"> {!! QrCode::format('svg')->gradient(0, 0, 51, 0, 102, 204, 'diagonal')->generate('https://life.segoviagroup.com/verify/' . Auth::user()->id); !!}</div>
                            {{-- <div class="pull-left"><img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->gradient(73, 73, 255, 73, 73, 255, 'radial')->merge('/public/img/logo.png',.3)->generate('https://life.segoviagroup.com/verify/' . Auth::user()->id)); !!}" class="img-thumbnail pull-right" style="height: 80px; width:80px"></div> --}}
  {{--                      </div>

                    </div>
                    <div class="row text-center py-3">
                        <div class="col text-center">

                            {{-- <h5 class="text-center">Name: {{ Auth::user()->fname }}</h5> --}}
  {{--                        <h5 class="font-weight-bold text-center" style="text-transform: capitalize;"> {{ Auth::user()->fname . ' ' . Auth::user()->mname .' '. Auth::user()->lname }} </h5>

                        </div>

                    </div>
                </div>
                {{-- <button class="btn btn-success btn-sm">Send to your Email</button> --}}
  {{--                <a class="btn btn-info mt-1 btn-sm"  data-toggle="modal" data-target="#userModal">Vaccination Info</a>
                {{-- <a class="btn btn-success mt-1 btn-sm" href="/send_otp">Send One Time Pin</a> --}}
{{--          </div>
            <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
              <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card d-none">
                  <div class="card-header">
                    <h3 class="card-title">Available Doctors</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                    <li>
                        <img src="/img/{{Auth::user()->avatar}}" alt="User Image">
                        <a class="users-list-name" href="#">Mark</a>
                        <span class="users-list-date">07 Oct</span>
                      </li>
                      <li>
                        <img src="dist/img/user8-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Norman</a>
                        <span class="users-list-date">Yesterday</span>
                      </li>
                      <li>
                        <img src="dist/img/user6-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#">John</a>
                        <span class="users-list-date">12 Jan</span>
                      </li>
                      <li>
                        <img src="dist/img/user2-160x160.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Elon</a>
                        <span class="users-list-date">13 Jan</span>
                      </li>


                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="javascript:">View All Doctors</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
            <!-- /.card -->



            <!-- TO DO List -->
            <div class="card d-none">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  To Do List
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Design a nice theme</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                      <label for="todoCheck2"></label>
                    </div>
                    <span class="text">Make the theme responsive</span>
                    <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo3" id="todoCheck3">
                      <label for="todoCheck3"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo4" id="todoCheck4">
                      <label for="todoCheck4"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo5" id="todoCheck5">
                      <label for="todoCheck5"></label>
                    </div>
                    <span class="text">Check your messages and notifications</span>
                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo6" id="todoCheck6">
                      <label for="todoCheck6"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
              </div>
            </div>
            <!-- /.card -->

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

          <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary d-none" id="app_message">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fa fa-envelope"></i>
                Doctors Chat</h3>

                <div class="card-tools">
                  <span title="3 New Messages" class="badge badge-primary">3</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                    <i class="fas fa-comments"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                 <chat-messages :messages="messages"></chat-messages>
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            ...
                            <small class="contacts-list-date float-right">2/28/2015</small>
                          </span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            ...
                            <small class="contacts-list-date float-right">2/23/2015</small>
                          </span>
                          <span class="contacts-list-msg">I will be waiting for...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nadia Jolie
                            <small class="contacts-list-date float-right">2/20/2015</small>
                          </span>
                          <span class="contacts-list-msg">I'll call you back at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            ...
                            <small class="contacts-list-date float-right">2/10/2015</small>
                          </span>
                          <span class="contacts-list-msg">Where is your new...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            John K.
                            <small class="contacts-list-date float-right">1/27/2015</small>
                          </span>
                          <span class="contacts-list-msg">Can I take a look at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            ...
                            <small class="contacts-list-date float-right">1/4/2015</small>
                          </span>
                          <span class="contacts-list-msg">Never mind I found...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                  </ul>
                  <!-- /.contacts-list -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <chat-form
                            v-on:messagesent="addMessage"
                            :user="{{ Auth::user() }}" >

                    </chat-form>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
            <!-- Calendar -->
            <div class="card bg-gradient-success collapsed-card d-none">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- Map card -->
            <div class="card bg-gradient-primary collapsed-card d-none">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Healthcare Providers Branch Map
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="makati-map" style="height: 250px; width: 100%;"></div>
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            <!-- solid sales graph -->
            <div class="card bg-gradient-info collapsed-card d-none">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Doctors Graph
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">VaxPass</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Patients</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Billing</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->



            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="container text-center">
            <small class="m-0 text-center">
            Copyright &copy; 2021 ActivePass <a href="/terms" class="d-none">PRIVACY & TERMS</a></small>
  </div>

</footer>
</div>

<script src="{{ asset('js/app.js') }}" ></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="plugins/sparklines/sparkline.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard.js"></script>

</body>
</html>


















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
      <li class="nav-item d-none d-sm-inline-block ">
        <a href="#" class="nav-link d-none">Contact</a>
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

    </ul>
  </nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-light elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="https://activepass.app/img/plus.png" alt="" class="brand-image"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
          Patient Dashboard
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="/patients" class="nav-link ">
              <img src="/img/pnt.png" alt="" sizes="15" srcset="">
              <p>View Users</p>
            </a>
          </li>
          <li class="nav-item">
                <a href="/admin/clinic" class="nav-link ">
            <i class="fa fa-logut">
              <p>
                Logout
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


<main>

  <div class="content-wrapper" style="background-color: #3A3B3C">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content d-flex justify-content-center" >
        <!-- Main row -->
        <div class="row d-flex justify-content-center">
          <!-- Left col -->
          <section class="col connectedSortable">
            <div class="card d-flex justify-content-center" style="width: 2.55in; height:4.25in" >
                <div class="card-header text-center">
                    <h3 class="card-title">
                        <h4><b>Certificate of Vaccination</b></h4>

                </div>
                <div class="card-body">
                    <div class="row text-center" >
                        <label>ActivePass is a digital vaccine certification for <b>COVID-19</b></label>
                        <small>Scan the QR below to verify status.</small>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <img src="https://activepass.app/img/default.png" class="img-thumbnail pull-right" style="height: 70px; width:70px">
                        </div>
                        <div class="col ">
                            <div class="pull-left"><img src="data:image/png;base64, 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" class="img-thumbnail pull-right" style="height: 80px; width:80px"></div>
                        </div>

                    </div>
                    <div class="row text-center py-3">
                        <div class="col text-center">


                        <h5 class="font-weight-bold text-center" style="text-transform: capitalize;"> Admin   </h5>

                        </div>

                    </div>
                </div>
                <a class="btn btn-info mt-1 btn-sm"  data-toggle="modal" data-target="#userModal">Vaccination Info</a>
                <a class="btn btn-success mt-1 btn-sm"  data-toggle="modal" data-target="#reportModal"><i class="nav-icon fas fa-flag"></i> Report Adverse Events</a>

            </div>
            <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header d-block">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="row">
                              <div class="col">
                                  <img src="https://activepass.app/img/default.png" class="img-thumbnail " style="height: 70px; width:70px">
                                  <label class="" id="exampleModalLongTitle" style="text-transform: capitalize;">Name: Admin  </label>
                              </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <table class="table table-border">
                          <tr class="col-md-6 table-primary">
                            <th>Doctor:               </th>
                            <th>Date:                 </th>
                            <th>Date:                 </th>
                            <th>block number:         </th>
                            <th>Status:           </th>
                          </tr>

                          <tr>
                            <td class="text-success">First Dose</td>
                            <td>15, Jul 2021</td>
                            <td>15, Jul 2021</td>
                            <td>3434242</td>
                            <td>Pending</td>
                          </tr>
                          <tr>
                            <td class="text-success">Second Dose</td>
                            <td>15, Jul 2021</td>
                            <td>15, Jul 2021</td>
                            <td>3434242</td>
                            <td>Pending</td>
                          </tr>
                          <tr>
                            <td>Vaccine Provider:</td>
                          </tr>


                    </table>
                        </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <input type="hidden" name="_token" value="woCy6j19D9l7ZkhBUx6gr4l5ejWjTXFJtGzYYm3u">                           <div class="form-group row">
                               <label class="col-md-2 col-form-label text-md-right">Date</label>

                               <div class='input-group col-md-8 date' id='datetimepicker1'>
                                   <input type='date' class="form-control" name="date_1" value="2021-07-15"/>
                                   <span class="input-group-addon">
                                       <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>

                            </div>
                            <input type="hidden" name="user_id" value="1" >
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
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</main>

<footer class="main-footer">
  <div class="container text-center">
            <small class="m-0 text-center">
            Copyright &copy; 2021 ActivePass <a href="/terms" class="d-none">PRIVACY & TERMS</a></small>
  </div>

</footer>
</div>

<script src="https://activepass.app/js/app.js" ></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="plugins/sparklines/sparkline.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard.js"></script>


</html>
--}}






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
      <li class="nav-item d-none d-sm-inline-block ">
        <a href="#" class="nav-link d-none">Contact</a>
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

    </ul>
  </nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-light elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="https://activepass.app/img/plus.png" alt="" class="brand-image"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
          Patient Dashboard
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="/patients" class="nav-link ">
              <img src="/img/pnt.png" alt="" sizes="15" srcset="">
              <p>View Users</p>
            </a>
          </li>
          <li class="nav-item">
                <a href="/admin/clinic" class="nav-link ">
            <i class="fa fa-logut">
              <p>
                Logout
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


<main>

  <div class="content-wrapper" style="background-color: #3A3B3C">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content d-flex justify-content-center" >
        <!-- Main row -->
        <div class="row d-flex justify-content-center">
          <!-- Left col -->
          <section class="col connectedSortable">
            <div class="card d-flex justify-content-center" style="width: 2.55in; height:4.25in" >
                <div class="card-header text-center">
                    <h3 class="card-title">
                        <h4><b>Certificate of Vaccination</b></h4>

                </div>
                <div class="card-body">
                    <div class="row text-center" >
                        <label>ActivePass is a digital vaccine certification for <b>COVID-19</b></label>
                        <small>Scan the QR below to verify status.</small>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <img src="https://activepass.app/img/default.png" class="img-thumbnail pull-right" style="height: 70px; width:70px">
                        </div>
                        <div class="col ">
                            <div class="pull-left"><img src="data:image/png;base64, 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" class="img-thumbnail pull-right" style="height: 80px; width:80px"></div>
                        </div>

                    </div>
                    <div class="row text-center py-3">
                        <div class="col text-center">


                        <h5 class="font-weight-bold text-center" style="text-transform: capitalize;"> Admin   </h5>

                        </div>

                    </div>
                </div>
                <a class="btn btn-info mt-1 btn-sm"  data-toggle="modal" data-target="#userModal">Vaccination Info</a>
                <a class="btn btn-success mt-1 btn-sm"  data-toggle="modal" data-target="#reportModal"><i class="nav-icon fas fa-flag"></i> Report Adverse Events</a>

            </div>
            <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header d-block">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="row">
                              <div class="col">
                                  <img src="https://activepass.app/img/default.png" class="img-thumbnail " style="height: 70px; width:70px">
                                  <label class="" id="exampleModalLongTitle" style="text-transform: capitalize;">Name: Admin  </label>
                              </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <table class="table table-border">
                          <tr class="col-md-6 table-primary">
                            <th>Doctor:               </th>
                            <th>Date:                 </th>
                            <th>Date:                 </th>
                            <th>block number:         </th>
                            <th>Status:           </th>
                          </tr>

                          <tr>
                            <td class="text-success">First Dose</td>
                            <td>15, Jul 2021</td>
                            <td>15, Jul 2021</td>
                            <td>3434242</td>
                            <td>Pending</td>
                          </tr>
                          <tr>
                            <td class="text-success">Second Dose</td>
                            <td>15, Jul 2021</td>
                            <td>15, Jul 2021</td>
                            <td>3434242</td>
                            <td>Pending</td>
                          </tr>
                          <tr>
                            <td>Vaccine Provider:</td>
                          </tr>


                    </table>
                        </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <input type="hidden" name="_token" value="woCy6j19D9l7ZkhBUx6gr4l5ejWjTXFJtGzYYm3u">                           <div class="form-group row">
                               <label class="col-md-2 col-form-label text-md-right">Date</label>

                               <div class='input-group col-md-8 date' id='datetimepicker1'>
                                   <input type='date' class="form-control" name="date_1" value="2021-07-15"/>
                                   <span class="input-group-addon">
                                       <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>

                            </div>
                            <input type="hidden" name="user_id" value="1" >
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
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</main>

<footer class="main-footer">
  <div class="container text-center">
            <small class="m-0 text-center">
            Copyright &copy; 2021 ActivePass <a href="/terms" class="d-none">PRIVACY & TERMS</a></small>
  </div>

</footer>
</div>

<script src="https://activepass.app/js/app.js" ></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="plugins/sparklines/sparkline.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard.js"></script>


</html>
