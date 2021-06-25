<?php

use App\Models\User;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\HealthPartnerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClinicController;
Auth::routes();

Route::view('/','welcome');

Route::middleware(['auth'])->group(function () {
    Route::view('home', 'user.dashboard');
    Route::resource('users', PatientController::class);
    Route::get('patients/new', [PatientController::class,'new']);
    Route::resource('patients',PatientController::class);
    Route::resource('healthprovider', HealthPartnerController::class);
});
Route::get('city/{id}',[ClinicController::class, 'fetchCity']);

