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
Route::get('/verify/{id}', function ($id) {
    $vaccine_status = User::where('id', $id)->get();

    return view('verify_vax', compact('vaccine_status'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/send_otp', [App\Http\Controllers\ImmunizationController::class, 'send_otp'])->name('send_otp');
Route::get('/immunization',  function () {
    return view('user.immunization');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::post('/verify-otp', [TCG\Voyager\Http\Controllers\VoyagerUserController::class, 'verify'])->name('verify-otp');
});

