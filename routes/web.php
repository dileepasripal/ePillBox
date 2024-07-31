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
use App\Http\Controllers\PrescriptionController;

// Home Route
Route::get('/', function () {
    return view('home');
});

// Authentication Routes (Laravel's built-in)
Auth::routes();

// Profile Routes (Protected by auth middleware)
Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Role-Based Routes
Route::middleware(['web', Admin::class])->group(function () {
    Route::get('admin', function() { return view('admin'); })->name('admin');
});

Route::middleware(['web', Doctor::class])->group(function () {
    Route::get('doctor', function() { return view('doctor'); })->name('doctor');
});

Route::middleware(['web', Pharmacist::class])->group(function () {
    Route::get('pharmacist', function() { return view('pharmacist'); })->name('pharmacist');
});

// Patient Routes (Protected by patient middleware)
Route::middleware(['web', Patient::class])->group(function () {
    Route::get('patient', [PatientController::class, 'showPrescriptions'])->name('patient'); 

    // Prescription Routes
    Route::post('/prescriptions', [App\Http\Controllers\PrescriptionController::class, 'store'])->name('prescriptions.store');
    Route::delete('/prescriptions/{prescription}', [App\Http\Controllers\PrescriptionController::class, 'destroy'])->name('prescriptions.destroy');
    Route::get('/prescriptions/{prescription}/edit', [PrescriptionController::class, 'edit'])->name('prescriptions.edit');
    Route::put('/prescriptions/{prescription}', [PrescriptionController::class, 'update'])->name('prescriptions.update'); 
    //Route::delete('/prescriptions/{prescription}', [PrescriptionController::class, 'destroy'])->name('prescriptions.destroy'); 
});

// Email Verification Route (Laravel's built-in)
Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');
