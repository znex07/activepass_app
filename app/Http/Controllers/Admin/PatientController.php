<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Models\Patient;
use App\Models\Immunization;
use App\Models\Clinic;
use App\Models\SideEffects;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{

    public function index()
    {
        $province = DB::table('provinces')->get();
        $patients_vacc = DB::table('patients')->join('immunizations','patients.id','immunizations.patient_id')->get();
        $patients = Patient::get();
        $clinic = Clinic::get();
        // dd($patients_vacc);
        return view('admin.users', compact('patients','clinic','province','patients_vacc'));
    }
    public function report(Request $request){
        SideEffects::create($request->all());

    }
    public function getreport(Request $request){
        $users = Patient::get();

        return view('admin.customercare', compact('users'));

    }
    public function new_vaccine_schedule(Request $request){
        $user = new Immunization;
        $user->first_dose = $request->first_dose;
        $user->second_dose =$request->second_dose;
        $user->save();
        return back();
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
        // dd($request->all());
        $request->validate = [
            'email' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'phone_number' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',

        ];
        dd($request->all());
        Patient::create($request->all());
        Immunization::create(
            [
                'patient_id' => $request->id,
                'first_dose' => '',
                'second_dose' => '',

            ]
        );
        return back()->with('success','Patient successfully created.');
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
