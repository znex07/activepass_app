
@extends('admin.layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content ">
      <div class="container-fluid">
          <div class="row d-flex justify-content-center">
              <div class="col">
                  <div class="row">
                      <div class="col">
                          <div class="card">
                              <div class="card-header border-0">
                                  <div class="d-flex justify-content-between">
                                      <h3 class="card-title">Patient Vaccine</h3>
                                      <a href="javascript:void(0);">Status: Verified</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                        <div class="widget-user-image">
                                            <img class="rounded-circle img-thumbnail" src="/img/default.png" alt="User Avatar" style="height: 70px; width: 70px">
                                          </div>
                                        <div class="info">
                                            <h3 class="mt-3" style="text-transform: capitalize"> {{Auth::user()->fname}} {{Auth::user()->lname}} </h3>
                                        </div>
                                    </div>
                                    <p>Makati City, Philippines</p>
                                    <div class="">
                                        <small>Registered since February 3, 2021</small>
                                        <button type="button" class="btn btn-primary btn-sm float-right ">Add Vaccine</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">Vaccine Schedule</h3>
                                      </div>
                                  </div>
                                  <div class="card-body">

                                      <p class="text-success">Type of Vaccine: Sinovac</p>
                                      <small>1st dose completed on May 3, 2021</small>
                                      <div class="callout callout-info">
                                        <h5><i class="fas fa-bullhorn text-pink"></i> Important!</h5>

                                        <p>Next dose will be on June 10, 2021</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">Timeline</h3>
                                        {{-- <a href="javascript:void(0);">Status: Verified</a> --}}
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                    <div class="image">
                                        <img src="{{ asset('/img/doc2.png') }}" class="img-circle elevation-2" alt="User Image">
                                    </div>
                                        <div class="info">
                                            <textarea name="comment" id="" placeholder="Leave a comment" class="form-control" rows="2"></textarea>

                                        </div>
                                    </div>

                                    <div class="timeline">
                                        <!-- timeline time label -->
                                        <div class="time-label">
                                          <span class="bg-red"><small>10 Feb. 2021</small> </span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <div>
                                          <i class="fas fa-syringe bg-green"></i>
                                          <div class="timeline-item">
                                            <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                            <div class="timeline-body">
                                                Patient completed 1st dose of Sinovac
                                            </div>
                                          </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        <div>
                                          <i class="fas fa-user bg-green"></i>
                                          <div class="timeline-item">
                                            <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
                                            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> Doctor accepted your appointment request!</h3>
                                          </div>
                                        </div>
                                        <div class="time-label">
                                          <span class="bg-green">3 Jan. 2021</span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->

                                        <!-- END timeline item -->
                                        <div>
                                          <i class="fas fa-clock bg-gray"></i>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
             </div>
             <div class="col">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Patient Overview</h3>
                            <a href="">Edit</a>
                        </div>
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      <p class="d-flex flex-column">
                        <span class="font-weight-light">{{ Auth::user()->email }}</span>
                        <span class="font-weight-light text-md">Current Address</span>
                        <span class="font-weight-light text-md">{{ Auth::user()->address1 }}</span>
                      </p>
                      <p class="ml-auto d-flex flex-column text-right">
                        <span class="text-success">
                          <i class="fas fa-arrow-up"></i> 33.1%
                        </span>
                        <span class="text-muted">Since last month</span>
                      </p>
                    </div>
                    <!-- /.d-flex -->

                    <div class="position-relative mb-4">
                        <textarea name="notes" placeholder="Add patient notes" id="" class="form-control" rows="10"></textarea>

                    </div>

                    <div class="d-flex flex-row justify-content-end">
                      <span class="mr-2">
                        <button class="btn btn-info"> Save </button>
                      </span>


                    </div>
                    </div>
                  </div>
                </div>
                <!-- /.card -->


              </div>
            <!-- /.row -->

        </div>

      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
@endsection
