<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Patient;
use Twilio\Rest\Client;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;
    use RegistersUsers {
        showRegistrationForm as laravelShowRegistrationForm;
    }
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
    public function showRegistrationForm()
    {
        $province = DB::table('provinces')->get();
        return view('auth.register',compact('province'));
    }
    public function request_vax()
    {
        $province = DB::table('provinces')->get();
        return view('request',compact('province'));
    }
    public function request_now(Request $request)
    {
        Patient::create([
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => bcrypt($request->password)

        ]);
        return view('request_completed',compact('request'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $data)
    {
        $validator = Validator::make($data->all(), [
            'email' => 'unique:users|max:255',
        ]);
        $messages = [
            'email.required' => 'We need to know your email address!',
        ];
        // if ($validator->fails()) {
        // return redirect('register')
        //             ->withErrors($validator)
        //             ->withInput();
        // }
        // dd($data);
        User::create([
            'fname' => $data['fname'],
            'mname' => $data['mname'],
            'lname' => $data['lname'],
            'role_id' => '1',
            'phone_number' => $data['phone_code'] . $data['phone_number'],
            'email' => $data['email'],
            'avatar' => 'default.png',
            'address1' => '',
            'address2' => '',
            'city' => '',
            'zip' => '',
            'is_vaccinated' => 'Pending...',
            'password' => Hash::make($data['password']),
        ]);
        // return redirect('home');
        // $token = getenv("TWILIO_AUTH_TOKEN");
        // $twilio_sid = getenv("TWILIO_SID");
        // $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        // $twilio = new Client($twilio_sid, $token);
        // $twilio->verify->v2->services($twilio_verify_sid)
        //     ->verifications
        //     ->create($data['phone_code'] . $data['phone_number'], "sms");

        // return redirect('verify-now')->with([
        //     'fname' => $data['fname'],
        //     'mname' => $data['mname'],
        //     'lname' => $data['lname'],
        //     'phone_number' => $data['phone_code'] . $data['phone_number'],
        //     'phone_code' => $data['phone_code'],
        //     'role' => $data['role'],
        //     'is_vaccinated' => $data['is_vaccinated'],
        //     'address' => $data['address'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]
    // );
 }
    protected function verify(Request $request)
    {
        $data = $request->validate([
            'verification_code' => ['required', 'numeric'],
            'phone_number' => ['required', 'string'],
        ]);
        // dd($request);
        /* Get credentials from .env */
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $verification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verificationChecks
            ->create($data['verification_code'], array('to' => $data['phone_number']));
        if ($verification->valid) {
            $user = tap(User::where('phone_number', $data['phone_number']))->update(['isVerified' => true]);
            /* Authenticate user */
            Auth::login($user->first());
            return redirect()->route('home')->with(['message' => 'Phone number verified']);
        }
        return back()->with(['phone_number' => $data['phone_number'], 'error' => 'Invalid verification code entered!']);
    }
}
