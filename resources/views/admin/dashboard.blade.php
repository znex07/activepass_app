
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
{{-- if error appears then this will appear.  --}}
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">

                <div class="alert alert-info alert-dismissible d-none" role="alert" id="message">
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
                      <h3 class="card-title"><img src="/img/patient3.png" alt="" sizes="5" srcset="">Users</h3>

                  <button class="btn btn-primary float-right d-none" data-toggle="modal" data-target="#addModal"><span class="fa fa-user-plus"></span> Add Patient</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="users_table" class="table table-bordered table-hover dataTable dtr-inline">
                    <thead>
                    <tr>
                      <th>Picture</th>
                      <th>Name</th>
                      <th>Vaccine type</th>
                      <th>Vaccine Status</th>
                      <th>First Dose</th>
                      <th>Second Dose</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $patients)
                    <tr>
                        <td><img src="/storage/app/{{$patients->path}}" alt="" style="height: 50px; width: 50px"></td>
                        <td class="font-weight-bold text-capitalize text-success">
                            <a href="{{ $patients->id }}" > {{ $patients->fname }}
                            {{ $patients->mname }}.
                            {{ $patients->lname }}
                            </a>
                        </td>
                        <td><select class="form-control" name="vaccine_brand">
                            <option>Sinopharm</option>
                            <option>CoronaVac</option>
                            <option>CoVaxin</option>
                            <option>Pfizer</option>
                            <option>Moderna</option>
                            <option>AstraZeneca</option>
                            <option>Sputnik V</option>
                            <option>Johnson&Johnson</option>
                          </select>
                        </div></td>
                        <td><select class="form-control" name="user_type" id="user_type">
                            <option selected>Pending</option>
                            <option>Completed</option>
                        </select></td>
                        <td><select class="form-control" name="user_type" id="user_type">
                            <option selected>Notified</option>
                            <option>Confirmed</option>
                            <option>No-show</option>
                            <option>Done</option>
                        </select></td>
                        <td><select class="form-control" disabled name="user_type" id="user_type">
                            <option selected>Notified</option>
                            <option>Confirmed</option>
                            <option>No-show</option>
                            <option>Done</option>
                        </select></td>
                        <td class="no-sort no-click bread-actions">
                            <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-sm btn-success" id="btn-save"><span class="fa fa-save" id="saving"></span> Save</button>
                            <button type="button" class="btn btn-sm btn-primary" id="btn-save"><span class="fa fa-edit" id="edit"></span> Edit</button>
                            <button type="button" class="btn btn-sm btn-danger btn-del" data-toggle="modal" data-info="{{$patients->id}}" data-target="#delModal"><span class="fa fa-trash "></span> Delete</button>
                            </div>
                        </td>
                      </tr>

                      @endforeach
                    </tbody>
                </table>
                <a name="" id="" class="btn btn-sm btn-primary d-none" href="{!! route('patients.destroy',1) !!}" role="button">Save</a>
                <button class="btn btn-primary btn-sm float-left" data-toggle="modal" data-target="#addModal"><span class="fa fa-user-plus"></span> Add Patient</button>
                <button class="btn btn-danger btn-sm float-right" data-toggle="modal" data-target="#addModal"><span class="fa fa-file-pdf"></span> Print PDF</button>

            </div>
        </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
</div>
<input type="hidden" id="did">

<div class="modal fade" tabindex="-1" role="dialog" id="delModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete User?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this user? </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger delete"><i class="fa fa-trash"></i> Delete</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add Patient</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form action="{{route('patients.store')}}" method="POST" id="patient-new" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="col-md-12">
                <img src="/img/doc2.png" alt="" id="profile_pic" style="height:70px; width: 70px" srcset="" class="mb-1 img-thumbnail">
                <div class="form-group">
                    <input type="file" name="image" placeholder="Choose image" id="image" class="form-control form-control-lg">
                    @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

        <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
        <input id="fname" name="fname" class="form-control" placeholder="First name" type="text">
        <input id="mname" name="mname" class="form-control" placeholder="Middle name" type="text">
        <input id="lname" name="lname" class="form-control" placeholder="Last name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
        </div>
        <select class="custom-select" id="phone_prefix" name="phone_code" style="max-width: 120px;">
            <option selected="">+63</option>
            <option value="1">+97</option>
            <option value="2">+19</option>
            <option value="3">+70</option>
        </select>
        <input name="phone_number" id="phone" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="inputAddress">Address</label>
                <input id="address1" type="text" class="form-control" name="floor_no" id="inputAddress" placeholder="Unit # /Block and Lot / Street">
            </div>

            <div class="form-group col-md-6">
                <label for="inputAddress2">Address 2</label>
                <input id="address2" type="text" class="form-control" name="house_no" id="inputAddress2" placeholder="Building / Subdivision / Village / floor">
            </div>
        </div>
            <div class="form-row">

            <div class="form-group col-md-4">
                <label for="brgy">Province</label>
                <select id="province" name="province" class="form-control">
                    <option selected hidden disabled>Choose Province</option>
                    @foreach ($province as $prov)
                    <option value="{{$prov->id}}">{{$prov->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
                <label for="city">City</label>
                <select id="city" name="city" class="form-control">
                    <option selected disabled hidden>City</option>
                    <option>...</option>

                </select>
                </div>
                <div class="form-group col-md-2">
                <label for="brgy">Barangay</label>
                <input id="brgy" type="text" name="barangay" class="form-control" >
                </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary "><i class="fa fa-user-plus"></i> Add</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
        </div>
        </div>
    </form>
    </div>
    </div>

    </div>
</div>
<script>
    $(document).ready(function(){
        $('.btn-del').click(function(){
            var id =  $(this).data('info');
            $('#did').val(id);
            console.log(id);
        });
        $('.delete').click(function(){
            var id = $("#did").val();
            $.ajax({
            type: 'delete',
            url:  '{!! url('admin/patients' ) !!}/' + id,
            data: {
                '_token': '{{csrf_token()}}',
                'id' : id,
            },
            success: function(data) {
                // $('#users_table').DataTable({ ajax: data }).ajax.reload();
                // $('#delModal').modal().hide();
                window.location.reload();
                console.log('success'+data);
            }
        });

        });
        $("#image").change(function(){
            var input = this;
            var url = $(this).val();
            var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
            if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
            {
                var reader = new FileReader();

                reader.onload = function (e) {
                $('#profile_pic').attr('src', e.target.result);
                }
            reader.readAsDataURL(input.files[0]);
            }
            else
            {
                $('#profile_pic').attr('src', '/image/default.png');
            }
        });
        $(document).on('change','#province', function(){
            $("#city option").remove();
            $.ajax({
                type: 'GET',
                url: '/fetchCity/'+$(this).val(),
                success: function(data){
                    $.each( data, function(id, value){
                        $('#city').append('<option > '+data[id]+'</option>');
                    })
                }
            });

        });
    });

</script>
@endsection
