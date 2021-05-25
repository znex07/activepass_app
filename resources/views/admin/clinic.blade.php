@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="card d-flex justify-content-center">
            <div class="card-body">
                SELECT YOUR HEALTHCARE PROVIDER
                <table id="providers_table" class="table table-bordered table-hover dataTable dtr-inline">
                    <thead>
                    <tr>
                      <th><img src="/img/healthcare 2.png" style="width: 30px; height: 30px"></th>
                      <th>Healthcare Provider</th>
                      <th>Clinic Hours</th>
                      <th>Clinic Days</th>
                      <th>Availability</th>
                      <th>Number of Patients</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($clinic as $provider)
                    <tr>
                      <td><img src="/img/{{ $provider->img }}" style="width: 30px; height: 30px"></td>

                        <td class="text-primary"><button type="button" class="btn btn-outline-primary btn-sm btn-block btn-flat"><i class="fa fa-book"></i>
                            {{ $provider->name }}
                        </button></td>
                        <td>{{ $provider->clinic_hours }}</td>
                        <td>{{ $provider->clinic_days }}</td>
                        <td>{{ $provider->availability }}</td>
                        <td>{{ $provider->patients_number }}</td>

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
