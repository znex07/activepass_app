
@extends('admin.layouts.admin')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6 d-none">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">

                <div class="alert alert-info alert-dismissible fade" role="alert" id="message">
                    <p class="card-text"> <span class="fa fa-info-circle"></span> All personal data you input is confidential and be kept private </p>
                    <button type="button" class="close" dat a-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


          </div>
          <!-- /.col-md-6 -->

        </div>
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Users</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="users_table" class="table table-bordered table-hover dataTable dtr-inline">
                    <thead>
                    <tr>
                      <th>Name</th>
                      <th>Vaccine Status</th>
                      <th>Vaccine type</th>
                      <th>First Dose</th>
                      <th>Second Dose</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $patients)
                    <tr>
                        <td class="text-primary"><button type="button" class="btn btn-outline-primary btn-sm btn-block btn-flat"><i class="fa fa-book"></i>
                            {{ $patients->fname }}
                            {{ $patients->mname }}
                            {{ $patients->lname }}
                        </button></td>
                        <td>{{ $patients->is_vaccinated }}</td>
                        <td>{{ $patients->vaccine_brand }}</td>
                        <td>{{ Carbon\Carbon::parse($patients->date_1)->formatLocalized('%B %d, %Y')}}</td>
                        <td>{{ Carbon\Carbon::parse($patients->date_2)->formatLocalized('%B %d, %Y')}}</td>
                        <td class="no-sort no-click bread-actions">
                            <a href="/admin/profile/{{ $patients->id }}" class="edit-modal btn btn-sm btn-info center" ">
                          <span class="fa fa-edit"></span> Edit
                            </a>

                      </td>
                      </tr>

                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>
        <!-- /.row -->
</div>
  </div>

  <script>

</script>
@endsection
