
@extends('admin.layouts.admin')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        
</div>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible" role="alert" id="message">
                            <p class="card-text"> <span class="fa fa-info-circle"></span> {{ $message }} </p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" aria-hidden = "true">
                            <span aria-hidden="true">&times;</span>
                        </div>
                    @endif

                </button>
            </div>


          </div>
          <!-- /.col-md-6 -->

        </div>
        <div class="row">
            <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h3 class="card-title"><img src="/img/patient3.png" alt="" style="height:40px; width: 25px;" srcset="">Users</h3>
                      <a class="btn btn-primary float-right" href="patients/new"><span class="fa fa-user-plus"></span> Add Patient</a>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="users_table" class="table table-bordered table-hover dataTable dtr-inline">
                    <thead>
                    <tr>
                      <th>Name</th>
                      <th>Vaccine type</th>
                      <th>Vaccine Status</th>
                      <th>First Dose</th>
                      <th>Second Dose</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($patients as $patients)
                    <tr>
                        <td class="font-weight-bold text-capitalize text-success">
                            <a href="/admin/profile/{{ $patients->id }}" > {{ $patients->fname }}
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
                            <div class="btn-group" role="group" aria-label="actions">
                                <a type="button" class="btn btn-sm btn-success" id="btn-save"><i class="fa fa-save"></i> Save</a>
                                <a class="btn btn-sm btn-info" href="{{ route('patients.edit', $patients->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                <form action="{{ route('patients.destroy',$patients->id) }}" method="POST" id="delete-form">
                                
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit" ><i class="fa fa-trash"></i> Delete</button>
                                </form>   
                             </div>                         
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
        <div class="modal-body">
            (*)<small>Required</small><hr>

    <form action="/register-patient" method="POST" id="patient-new">
        @csrf
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
                <input id="address1" type="text" class="form-control" id="inputAddress" placeholder="Unit # /Block and Lot / Street">
            </div>

            <div class="form-group col-md-6">
                <label for="inputAddress2">Address 2</label>
                <input id="address2" type="text" class="form-control" id="inputAddress2" placeholder="Building / Subdivision / Village / floor">
            </div>
        </div>
            <div class="form-row">

            <div class="form-group col-md-4">
                <label for="brgy">Province</label>
                <select id="province" name="province" class="form-control">
                    <option selected hidden disabled>Choose Province</option>

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
                <input id="brgy" type="text" class="form-control" >
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
        $('#delete-form').on("submit", function(){
            return confirm("Do you want to delete this item?");
        });
    });

</script>
@endsection
