@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="card d-flex justify-content-center">
            <div class="card-body">
                VAXPASS REQUEST
                <table id="providers_table" class="table table-bordered table-hover dataTable dtr-inline">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th><img src="/img/Patient 3.png" style="width: 30px; height: 30px"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($patient as $patients)
                    <tr>
                      {{-- <td><img src="/img/{{ $provider->img }}" style="width: 30px; height: 30px"></td> --}}

                      <td>{{ $patients->fname }}</td>
                      <td>{{ $patients->phone_number }}</td>
                      <td>{{ $patients->email }}</td>
                      <td class="text-primary">
                          <button type="button" class="btn btn-outline-success btn-sm  btn-flat"><i class="fa fa-thumbs-up"></i>
                          Aprove
                      </button>
                      <button type="button" class="btn btn-outline-danger btn-sm btn-flat"><i class="fa fa-window-close"></i>
                          Decline
                      </button>
                      </td>

                      </td>
                      </tr>

                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>


@endsection
