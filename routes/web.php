<?php

use App\Models\User;
use App\Models\Patient;
use App\Models\Clinic;
use App\Models\SideEffects;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------|
*/


Auth::routes();

Route::get('/home', [HomeController::class, 'index']);;
Route::get('/search_vax', [PatientController::class, 'index']);
Route::post('/register-user', [RegisterController::class, 'create'])->name('register-user');
Route::get('/request_vax', [RegisterController::class, 'request_vax']);
Route::post('/request_now', [RegisterController::class, 'request_now']);
Route::post('/verify', [RegisterController::class, 'verify'])->name('verify');
Route::get('/send_otp', [App\Http\Controllers\ImmunizationController::class, 'send_otp'])->name('send_otp');
Route::post('/send_vax_mail', [App\Http\Controllers\ImmunizationController::class, 'send_mail'])->name('send_vax_mail');
Route::post('/add/vaccine', [App\Http\Controllers\ImmunizationController::class, 'give_vac']);
Route::get('/immunization',  function () {
    return view('user.immunization');
});
Route::post('/report/sideeffect',[App\Http\Controllers\PatientController::class, 'report'])->name('report');
// CHAT
Route::get('/chat', [ChatsController::class, 'index']);
Route::get('messages', [ChatsController::class, 'fetchMessages']);
Route::get('fetchCity/{id}', [App\Http\Controllers\ClinicController::class, 'fetchCity']);
Route::get('fetchClinic/{id}', [App\Http\Controllers\ClinicController::class, 'fetchClinic']);
Route::post('messages', [ChatsController::class, 'sendMessage']);
Route::post('/health_reg', [App\Http\Controllers\HealthPartnerController::class, 'store']);
Route::post('/recaptcha-page', [App\Http\Controllers\DevController::class, 'verifyRecaptcha']);
//ADMIN
Route::prefix('admin')->middleware(['auth'])->group(function () {
    //patient
    Route::resource('patients', PatientController::class);
});


Route::get('/', function () {
    return view('home');
});

Route::get('/terms', function () {
    return view('termscondition');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/reg_health_partner', function () {
    $province = DB::table('provinces')->get();
    return view('healthprovider.register',compact('province'));
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
    return view('recaptcha');
});
