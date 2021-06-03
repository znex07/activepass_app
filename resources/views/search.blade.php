@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center mt-4">
        <h3 class="text-center">HEALTHCARE PARTNERS</h3>
    </div>
    <div class="row d-flex justify-content-center">

        <div class="card d-flex justify-content-center">
            <div class="card-body">
                <table id="providers_table" class="table table-bordered table-hover dataTable dtr-inline">
                    <thead>
                    <tr>
                      <th class="d-flex justify-content-center"><img src="/img/healthcare 2.png" style="width: 50px; height: 50px"></th>
                      <th>Healthcare Provider</th>
                      <th>Clinic Hours</th>
                      <th>Clinic Days</th>
                      <th>Availability</th>
                      <th>Number of Patients</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $provider)
                    <tr>
                      <td class="d-flex justify-content-center"><img src="/img/{{ $provider->img }}" style="width: 30px; height: 30px"></td>

                        <td class="text-primary"><a href="/request_vax" class="btn btn-primary btn-sm btn-block btn-flat"><i class="fa fa-book"></i>
                            {{ $provider->name }}
                        </a></td>
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
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js" defer></script>

<script>
    $(document).ready(function() {
        $('#providers_table').DataTable({
            // rowReorder: {selector: 'td:nth-child(3)'},
            responsive: true,
            columnDefs: [
                { responsivePriority: 1, targets: 0 },
		            { responsivePriority: 2, targets: 1 }
            ],
        });
    });
</script>
@endsection
