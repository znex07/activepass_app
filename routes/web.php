<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
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
Route::post('/register-user', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register-user');
Route::post('/verify', [App\Http\Controllers\Auth\RegisterController::class, 'verify'])->name('verify');
Route::get('/send_otp', [App\Http\Controllers\ImmunizationController::class, 'send_otp'])->name('send_otp');
Route::post('/send_vax_mail', [App\Http\Controllers\ImmunizationController::class, 'send_mail'])->name('send_vax_mail');
Route::get('/immunization',  function () {
    return view('user.immunization');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::post('/verify-otp', [TCG\Voyager\Http\Controllers\VoyagerUserController::class, 'verify'])->name('verify-otp');
});

