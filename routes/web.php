<?php

use App\Models\User;
use App\Models\SideEffects;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------|
*/

Route::get('/', function () {
    return view('welcome');
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
    return view('admin.addpatient', compact('side_effects',$side_effects));
});
Route::get('/terms', function () {
    return view('termscondition');
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
Route::get('/verify-now', function () {
    // $vaccine_status = User::where('id', $id)->get();

    return view('auth.verify-otp');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/view-vax', [App\Http\Controllers\HomeController::class, 'view']);
Route::post('/register-user', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register-user');
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
Route::post('messages', [App\Http\Controllers\ChatsController::class, 'sendMessage']);


