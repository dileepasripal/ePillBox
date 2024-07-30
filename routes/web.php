<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Doctor;
use App\Http\Middleware\Patient;
use App\Http\Middleware\Pharmacist;
use Illuminate\Support\Facades\Auth;
//$adminMiddleware = new Admin();

//dd($adminMiddleware);

Route::get('/', function () {
    return view('home');
});

/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

require __DIR__.'/auth.php';

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin', function() {return view('admin');})->middleware(['web', Admin::class])->name('admin');
Route::get('patient', function() {return view('patient');})->middleware(['web', Patient::class])->name('patient');
Route::get('doctor', function() {return view('doctor');})->middleware(['web', Doctor::class])->name('doctor');
Route::get('pharmacist', function() {return view('pharmacist');})->middleware(['web', Pharmacist::class])->name('pharmacist');

