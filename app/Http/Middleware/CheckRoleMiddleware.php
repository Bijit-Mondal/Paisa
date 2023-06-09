<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRoleMiddleware
{
    public function handle(Request $request, Closure $next, string $role)
    {
        if ($role == 'guest' && auth()->user()->role_id != 5) abort(403);

        if ($role == 'admin' && auth()->user()->role_id != 4) abort(403);

        return $next($request);
    }

}
