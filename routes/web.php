<?php

use App\Models\User;
use App\Http\Controllers\Admin\PatientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClinicController;
Auth::routes();

Route::view('/','welcome');

Route::resource('user',PatientController::class);
Route::get('city/{id}',[ClinicController::class, 'fetchCity']);
Route::middleware(['auth'])->group(function () {
});

