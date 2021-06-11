<?php

namespace App\Http\Controllers;

use App\Models\HealthPartner;
use App\Models\User;
use Illuminate\Http\Request;

class HealthPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user = new User;
        //representative 1
        $user->fname = $request->fname1;
        $user->mname = $request->mname1;
        $user->lname = $request->lname1;
        $user->email = $request->email1;
        $user->password = bcrypt($request->password);
        $user->save();
        //representative 2
        $user = new User;
        $user->fname = $request->fname2;
        $user->mname = $request->mname2;
        $user->lname = $request->lname2;
        $user->email = $request->email2;
        $user->password = bcrypt($request->password);
        $user->save();
        //store new health partner
        $healthPartner = new HealthPartner;
        $healthPartner->business_name = $request->business_name;
        $healthPartner->business_type = $request->business_type;
        $healthPartner->telephone = $request->tel;
        $healthPartner->cellphone = $request->cp;
        $healthPartner->business_email = $request->company_email;
        $healthPartner->save();
        return $request;

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
