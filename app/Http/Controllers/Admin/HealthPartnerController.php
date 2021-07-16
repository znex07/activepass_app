<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Models\Patient;
use App\Models\Clinic;
use App\Models\HealthPartner;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HealthPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $province = DB::table('provinces')->get();
        $patients = Patient::get();
        $clinic = Clinic::get();
        return view('admin.addpatient', compact('patients','clinic','province'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate = [
            'business_name' => 'required',
            'business_type' => 'required',
            'building' => 'required',
            'postal_code' => 'required',
            'apartment' => 'required',
            'brgy' => 'required',
            'province' => 'required',
            'city' => 'required',
            'country' => 'required',
            'tel' => 'required',
            'cp' => 'required',
            'company_email' => 'required',
            'fname1' => 'required',
            'lname1' => 'required',
            'gender1' => 'required',
            'mname1' => 'required',
            'suffix_name1' => 'required',
            'email' => 'required',
            'fname2' => 'required',
            'lname2' => 'required',
            'mname2' => 'required',
            'suffix_name2' => 'required',
            'email2' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
            'g-recaptcha-response' => 'required',

        ];
        Patient::create($request->all());
        return view('request_completed')->with('fname1',$request->fname1);

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HealthPartner  $healthPartner
     * @return \Illuminate\Http\Response
     */
    public function show(HealthPartner $healthPartner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HealthPartner  $healthPartner
     * @return \Illuminate\Http\Response
     */
    public function edit(HealthPartner $healthPartner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HealthPartner  $healthPartner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HealthPartner $healthPartner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HealthPartner  $healthPartner
     * @return \Illuminate\Http\Response
     */
    public function destroy(HealthPartner $healthPartner)
    {

    }
}
