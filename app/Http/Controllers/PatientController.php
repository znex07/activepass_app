<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Patient;
use App\Models\Province;
use App\Models\Clinic;
use App\Models\SideEffects;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Patient::orderBy('created_at','desc')->get();
        $province = DB::table('provinces')->get();
        return view('admin.dashboard', compact('users','province'));

    }
    public function report(Request $request){
        // dd($request);
        SideEffects::create($request->all());


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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'floor_no' => 'required',
            'house_no' => 'required',
            'barangay' => 'required',
            'phone_number' => 'required',
            'city' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:patients'],
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('images/pic');
        $patient = new Patient;
        $patient->fname = $request->fname;
        $patient->mname = $request->mname;
        $patient->lname = $request->lname;
        $patient->floor_no = $request->floor_no;
        $patient->house_no = $request->house_no;
        $patient->phone_number = $request->phone_number;
        $patient->profile_pic = $name;
        $patient->path = $path;

        $patient->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->ajax())
        {
            Patient::find( $request->id )->delete();
            return response ()->json ();
        }
    }
    public function imageUploadPost(Request $request)

    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // $imageName = time().'.'.$request->image->extension();
        $imageName = session()->get('uniqueid').'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        /* Store $imageName name in DATABASE from HERE */
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }

}
