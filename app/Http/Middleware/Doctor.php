<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Doctor
{
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        $user=Auth::user();
        Log::info($user); // Log user details for debugging
        if($user->role==3){
            return $next($request);
        }
        if($user->role==2){
            return redirect('/patient');
        }
        if($user->role==1){
            return redirect('/admin');
        }
        if($user->role==4){
            return redirect('/pharmacist');
        }
        return redirect('/login')->with('error', 'You are not authorized to access that page.'); // Or redirect to another relevant page
    }
}
