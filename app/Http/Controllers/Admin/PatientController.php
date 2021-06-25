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
        return view('admin.users', compact('patients','clinic','province'));
    }
    public function report(Request $request){
        SideEffects::create($request->all());

    }
    public function new()
    {
        $province = DB::table('provinces')->get();
        $patients = Patient::get();
        $clinic = Clinic::get();
        return view('admin.addpatient', compact('patients','clinic','province'));

    }
    public function create()
    {
        $province = DB::table('provinces')->get();
        return view('healthprovider.register',compact('province'));
       
    }

    public function store(Request $request)
    {
        Patient::create($request->all());
        return redirect('patients')->with('success','Patient successfully created.');
    }

    public function show(Patient $patient)
    {
        return $patient->all();
    }

    public function edit(Patient $patient)
    {
        $province = DB::table('provinces')->get();
        $patients = Patient::get();
        $clinic = Clinic::get();
        return view('admin.editpatient',compact('patient','clinic','province'));
    }

    public function update(Request $request, Patient $patient)
    {
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with('success','post deleted successfully');
    }

    public function report_adverse(){
        return view('user.dashboard');
    }
}
