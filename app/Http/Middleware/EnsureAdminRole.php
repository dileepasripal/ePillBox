<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAdminRole
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->user() || !$request->user()->hasRole('admin')) {
            abort(403, 'Unauthorized'); // Or redirect as needed
        }

        return $next($request);
    }
}
