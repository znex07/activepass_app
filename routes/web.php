<?php

use App\Models\User;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\HealthPartnerController;
use App\Http\Controllers\ImmunizationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClinicController;
Auth::routes();

Route::view('/','welcome');

Route::middleware(['auth'])->group(function () {
    Route::view('home', 'user.dashboard');
    Route::resource('users', PatientController::class);
    Route::get('patients/new', [PatientController::class,'new']);
    Route::get('customercare', [PatientController::class,'getreport']);
    Route::resource('patients',PatientController::class);
    Route::resource('immunization', ImmunizationController::class);

    Route::resource('healthprovider', HealthPartnerController::class);
});
Route::resource('healthpartner', HealthPartnerController::class);

Route::get('city/{id}',[ClinicController::class, 'fetchCity']);

