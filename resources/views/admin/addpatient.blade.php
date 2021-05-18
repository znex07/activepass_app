
@extends('admin.layouts.admin')

@section('content')

    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add User</h1>
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
<div class="content">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">

                <div class="alert alert-info alert-dismissible " role="alert" id="message">
                    <p class="card-text"> <span class="fa fa-info-circle"></span> All personal data you input is confidential and be kept private </p>
                    <button type="button" class="close" dat a-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="example-basic">
                        <h3>Basic Information</h3>
                        <section>
                            (*)<small>Required</small><hr>

                            <form action="/register-user" method="POST" id="patient-new">
                                @csrf
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                                    </div>
                                    <select class="form-control" name="user_type" id="user_type">
                                        <option selected="" disabled> Select User type</option>
                                        <option>Healthcare Provider</option>
                                        <option>Patient</option>
                                        <option>Doctor</option>
                                    </select>
                                </div> <!-- form-group end.// -->
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
                                <!--<input class="form-control" name="email" placeholder="Email address" type="email">-->
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> <!-- form-group// --><div class="form-group input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="form-row">

                                    <div class="form-group col">
                                        <label for="inputAddress">Address</label>
                                        <input id="address1" type="text" class="form-control" id="inputAddress" placeholder="Unit # /Block and Lot / Street">
                                    </div>

                                    <div class="form-group col">
                                        <label for="inputAddress2">Address 2</label>
                                        <input id="address2" type="text" class="form-control" id="inputAddress2" placeholder="Building / Subdivision / Village / floor">
                                    </div>
                                </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="brgy">Barangay</label>
                                      <input id="brgy" type="text" class="form-control" >
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="city">City</label>
                                      <select id="city" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                      <label for="inputZip">Zip</label>
                                      <input type="text" class="form-control" id="inputZip">
                                    </div>
                                  </div>
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

                        </section>
                        <h3>Security</h3>
                        <section>
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-question"></i> </span>
                                </div>
                                <select class="custom-select" name="security_question" >
                                    <option selected="">Select Security Question</option>
                                    <option value="1"></option>
                                    <option value="2"></option>
                                    <option value="3"></option>
                                </select>
                            </div>
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input class="form-control" name="sec_question" placeholder="Your Answer" type="text">
                            </div>
                            <h3>Password</h3>
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input class="form-control" name="password" placeholder="Create password" type="password">
                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input class="form-control" placeholder="Repeat password" type="password">
                            </div> <!-- form-group// -->

                        </section>
                        <h3>Notes</h3>
                        <section>
                            <p>Notes</p>
                            <textarea name="notes" id="" class="form-control" rows="10"></textarea>
                        </section>
                        <h3>Confirmation</h3>
                        <section>
                            <h4 id="inputtype">User Type: </h2>
                            <h4 id="inputname" style="text-transform: capitalize;">Name: </h2>
                            <h4 id="inputemail">Email: </h2>
                            <h4 id="inputaddress">Address: </h2>
                            <h4 id="inputphone">Phone Number: </h4>
                            <hr>
                            <br><br>
                            <small><span class="fa fa-info-circle"></span> By Completing Registration you agree to our terms and condition stated below.</small>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Terms And condition</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled><h1>Terms and Conditions</h1>


                                    <p>These Terms and Conditions constitute a legally binding agreement made between you, whether personally or on behalf of an entity (“you”) and [SG Webworks] (“we,” “us” or “our”), concerning your access to and use of the [sgzone.net] website as well as any other media form, media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the “Site”).</p>

                                    <p>You agree that by accessing the Site, you have read, understood, and agree to be bound by all of these Terms and Conditions. If you do not agree with all of these Terms and Conditions, then you are expressly prohibited from using the Site and you must discontinue use immediately.</p>

                                    <p>Supplemental terms and conditions or documents that may be posted on the Site from time to time are hereby expressly incorporated herein by reference. We reserve the right, in our sole discretion, to make changes or modifications to these Terms and Conditions at any time and for any reason.</p>

                                    <p>We will alert you about any changes by updating the “Last updated” date of these Terms and Conditions, and you waive any right to receive specific notice of each such change.</p>

                                    <P>It is your responsibility to periodically review these Terms and Conditions to stay informed of updates. You will be subject to, and will be deemed to have been made aware of and to have accepted, the changes in any revised Terms and Conditions by your continued use of the Site after the date such revised Terms and Conditions are posted. </P>

                                    <P>The information provided on the Site is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation or which would subject us to any registration requirement within such jurisdiction or country. </P>

                                    <P>Accordingly, those persons who choose to access the Site from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable. </P>

                                    <P>The Site is intended for users who are at least 13 years of age.  All users who are minors in the jurisdiction in which they reside (generally under the age of 18) must have the permission of, and be directly supervised by, their parent or guardian to use the Site. If you are a minor, you must have your parent or guardian read and agree to these Terms and Conditions prior to you using the Site. </P>

                                    <h3>INTELLECTUAL PROPERTY RIGHTS</h3>

                                    <p>Unless otherwise indicated, the Site is our proprietary property and all source code, databases, functionality, software, website designs, audio, video, text, photographs, and graphics on the Site (collectively, the “Content”) and the trademarks, service marks, and logos contained therein (the “Marks”) are owned or controlled by the entities they represent and are protected by copyright and trademark laws and various other intellectual property rights and unfair competition laws of the Philippines, foreign jurisdictions, and international conventions. </p>

                                    <p>The Content and the Marks are provided on the Site “AS IS” for your information and personal use only. Except as expressly provided in these Terms and Conditions, no part of the Site and no Content or Marks may be copied, reproduced, aggregated, republished, uploaded, posted, publicly displayed, encoded, translated, transmitted, distributed, sold, licensed, or otherwise exploited for any commercial purpose whatsoever, without our express prior written permission.</p>

                                    <p>Provided that you are eligible to use the Site, you are granted a limited license to access and use the Site and to download or print a copy of any portion of the Content to which you have properly gained access solely for your personal, non-commercial use. We reserve all rights not expressly granted to you in and to the Site, the Content and the Marks.</p>

                                    <h3>USER REPRESENTATIONS</h3>


                                    <p>By using the Site, you represent and warrant that:

                                    <br>(1) all registration information you submit will be true, accurate, current, and complete;

                                    <br>(2) you will maintain the accuracy of such information and promptly update such registration information as necessary;

                                    <br>(3) you have the legal capacity and you agree to comply with these Terms and Conditions;

                                    <br>(4) you are not under the age of 13;

                                    <br>(5) not a minor in the jurisdiction in which you reside, or if a minor, you have received parental permission to use the Site;

                                    <br>(6) you will not access the Site through automated or non-human means, whether through a bot, script, or otherwise;

                                    <br>(7) you will not use the Site for any illegal or unauthorized purpose;

                                    <br>(8) your use of the Site will not violate any applicable law or regulation.

                                    <br>If you provide any information that is untrue, inaccurate, not current, or incomplete, we have the right to suspend or terminate your account and refuse any and all current or future use of the Site (or any portion thereof). </p>

                                    <h3>USER REGISTRATION</h3>

                                    <p>You may be required to register with the Site. You agree to keep your password confidential and will be responsible for all use of your account and password. We reserve the right to remove, reclaim, or change a username you select if we determine, in our sole discretion, that such username is inappropriate, obscene, or otherwise objectionable.</p>
                            </textarea>
                              </div>
                        </section>
                    </form>

                    </div>
                  </div>
                </div>

          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            {{-- <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Sales</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">$18,230.00</span>
                    <span>Sales Over Time</span>
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
                  <canvas id="sales-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This year
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last year
                  </span>
                </div>
              </div> --}}
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
@endsection
