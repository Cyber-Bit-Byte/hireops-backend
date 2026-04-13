<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class SuperAdminMiddleware
{
   public function handle($request, Closure $next)
{
    if (!$request->user()?->hasRole('super-admin')) {
        abort(403, 'Super Admin access only');
    }

    return $next($request);
}
}
