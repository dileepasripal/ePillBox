<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/dashboard';
    public const ADMIN_DASHBOARD = '/admindashboard';
    public const PATIENT_DASHBOARD = '/patientdashboard';
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
