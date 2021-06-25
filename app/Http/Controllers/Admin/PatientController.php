<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Models\Patient;
use App\Models\Clinic;
use App\Models\SideEffects;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
   
    public function index()
    {
        $province = DB::table('provinces')->get();
        $patients = Patient::get();
        $clinic = Clinic::get();
        // dd($patients);
        return view('admin.addpatient', compact('patients','clinic','province'));

    }
    public function report(Request $request){
        SideEffects::create($request->all());

    }
    
    public function create()
    {
        $province = DB::table('provinces')->get();
        return view('healthprovider.register',compact('province'));
       
    }

    public function store(Request $request)
    {
        Patient::create($request->all());
        return redirect()->back();
    }

    public function show(Patient $patient)
    {
        
    }

    public function edit(Patient $patient)
    {
    }

    public function update(Request $request, Patient $patient)
    {
    }

    public function delete(Patient $patient, $id)
    {
        $patient->delete();
        return redirect()->back();
    }

    public function report_adverse(){
        return view('user.dashboard');
    }
}
