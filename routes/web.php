<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Doctor;
use App\Http\Middleware\Patient;
use App\Http\Middleware\Pharmacist;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\PatientController;

// Home Route
Route::get('/', function () {
    return view('home');
});

// Authentication Routes
Auth::routes(); // Keep this line to register default authentication routes

// Profile Routes (Protected by Auth Middleware)
Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); // Change to PUT
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Role-Based Routes (with Middleware)
Route::middleware(['web', Admin::class])->group(function () {
    Route::get('admin', function() { return view('admin'); })->name('admin');
});

//Route::middleware(['web', Patient::class])->group(function () {
//    Route::get('patient', function() { return view('patient'); })->name('patient');
//});

Route::middleware(['web', Doctor::class])->group(function () {
    Route::get('doctor', function() { return view('doctor'); })->name('doctor');
});

Route::middleware(['web', Pharmacist::class])->group(function () {
    Route::get('pharmacist', function() { return view('pharmacist'); })->name('pharmacist');
});

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
     ->middleware(['auth', 'throttle:6,1'])
     ->name('verification.send');

Route::middleware(['web', Patient::class])->group(function () {
    Route::get('patient', [PatientController::class, 'showPrescriptions'])->name('patient'); 
});
    
Route::post('/prescriptions', [App\Http\Controllers\PrescriptionController::class, 'store'])
    ->name('prescriptions.store')->middleware(['web', 'patient']);