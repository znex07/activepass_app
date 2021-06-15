<?php

use App\Models\User;
use App\Models\Patient;
use App\Models\Clinic;
use App\Models\SideEffects;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------|
*/

Route::get('/', function () {
    return view('home');
});
// ADMIN
Route::get('admin/dashboard', function () {
    $side_effects = SideEffects::all();

    return view('admin.dashboard', compact('side_effects',$side_effects));
});
Route::get('admin/profile/{id}', function ($id) {
    $user_info = User::where('id',$id)->get();
    $side_effects = SideEffects::all();

    return view('admin.profile', compact('side_effects','user_info'));
});
Route::get('admin/calendar', function () {
    $side_effects = SideEffects::all();

    return view('admin.calendar', compact('side_effects',$side_effects));
});
Route::get('admin/clinic', function () {
    $side_effects = SideEffects::all();
    $clinic = Clinic::get();
    return view('admin.clinic', compact('side_effects','clinic'));
});
Route::get('admin/patient/request', function () {
    $side_effects = SideEffects::all();
    $patient = Patient::get();
    return view('admin.request', compact('side_effects','patient'));
});
Route::get('/admin/customercare', function () {
    $side_effects = SideEffects::all();
    $users = User::all();
    return view('admin.customercare', compact('side_effects', 'users' ));
});
Route::get('/admin/messages', function () {
    $side_effects = SideEffects::all();

    return view('admin.messages', compact('side_effects',$side_effects));
});
Route::get('/admin/viewusers', function () {
    $side_effects = SideEffects::all();
    $users = User::all();
    return view('admin.users', compact('side_effects', 'users' ));
});
Route::get('/admin/addpatient', function () {
    $side_effects = SideEffects::all();
    $clinic = Clinic::get();
    $province = DB::table('provinces')->get();
    return view('admin.addpatient', compact('side_effects','clinic','province'));
});
Route::get('/terms', function () {
    return view('termscondition');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/reg_health_partner', function () {
    return view('healthprovider.register');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/edit-personal', function () {
    return view('user.personal_info');
});
Route::get('/upload-id', function () {
    return view('user.upload');
});
Route::get('/verify/{id}', function ($id) {
    $vaccine_status = User::where('id', $id)->get();
    return view('verify_vax', compact('vaccine_status'));
});
Route::get('/mprofile', function(){ return view('user.profile');});
Route::get('/verify-now', function () {
    // $vaccine_status = User::where('id', $id)->get();

    return view('auth.verify-otp');
});
Route::get('/recap', function () {
    return view('recap');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);;
Route::get('/search_vax', [App\Http\Controllers\PatientController::class, 'index']);
Route::post('/register-user', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register-user');
Route::get('/request_vax', [App\Http\Controllers\Auth\RegisterController::class, 'request_vax']);
Route::post('/request_now', [App\Http\Controllers\Auth\RegisterController::class, 'request_now']);
Route::post('/verify', [App\Http\Controllers\Auth\RegisterController::class, 'verify'])->name('verify');
Route::get('/send_otp', [App\Http\Controllers\ImmunizationController::class, 'send_otp'])->name('send_otp');
Route::post('/send_vax_mail', [App\Http\Controllers\ImmunizationController::class, 'send_mail'])->name('send_vax_mail');
Route::post('/add/vaccine', [App\Http\Controllers\ImmunizationController::class, 'give_vac']);
Route::get('/immunization',  function () {
    return view('user.immunization');
});
Route::post('/report/sideeffect',[App\Http\Controllers\PatientController::class, 'report'])->name('report');
// CHAT
Route::get('/chat', [App\Http\Controllers\ChatsController::class, 'index']);
Route::get('messages', [App\Http\Controllers\ChatsController::class, 'fetchMessages']);
Route::get('fetchCity/{id}', [App\Http\Controllers\ClinicController::class, 'fetchCity']);
Route::get('fetchClinic/{id}', [App\Http\Controllers\ClinicController::class, 'fetchClinic']);
Route::post('messages', [App\Http\Controllers\ChatsController::class, 'sendMessage']);
Route::post('/health_reg', [App\Http\Controllers\HealthPartnerController::class, 'store']);


