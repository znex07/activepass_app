
@extends('admin.layouts.admin')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <span><h1 class="m-0 text-dark"><img src="/img/doctor 1.png" class="img-fluid">Customer Care</h1></span>

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
                      <th>Ticket</th>
                      <th>Date</th>
                      <th>Patient</th>
                      <th>Status</th>
                      <th>Concern</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $patients)
                    <tr>
                        <td><a href="/admin/profile/{{ $patients->id }}">#8787</a></td>
                        <td>{{ Carbon\Carbon::parse($patients->date_1)->formatLocalized('%B %d, %Y')}}</td>
                        <td>{{ $patients->fname }} {{ $patients->mname }} {{ $patients->lname }}</td>
                        <td>Pending</td>
                        <td>Side Effect report</td>
                        <td class="no-sort no-click bread-actions d-none">
                            <a href="/admin/profile/{{ $patients->id }}" class="edit-modal btn btn-sm btn-info center" ">
                          <span class="fa fa-edit"></span> Edit
                            </a>
                          <button class="delete-modal btn btn-sm btn-danger center" data-info="{{$patients->fname}}}}">
                              <span class="fa fa-trash"></span> Delete
                          </button>
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
    $(document).ready(function() {

        $('#users_table').DataTable({
            rowReorder: {selector: 'td:nth-child(2)'},
            responsive: true,
            columnDefs: [
                { responsivePriority: 1, targets: 0 },
                { responsivePriority: 2, targets: -1 }
            ],
        });
    });
</script>
@endsection
