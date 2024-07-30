<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{

    public function handle(Request $request, Closure $next)
    {   

        if(!Auth::check()){
            return redirect('/login');
        }
        $user=Auth::user();
        if($user->role==1){
            return $next($request);
        }
        if($user->role==2){
            return redirect('/patient');
        }
        if($user->role==3){
            return redirect('/doctor');
        }
        if($user->role==4){
            return redirect('/pharmacist');
        }
        abort(403, 'Unauthorized');
    }
}
