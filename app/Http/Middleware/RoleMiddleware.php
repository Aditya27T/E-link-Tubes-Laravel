<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        $user = $request->user();

        if (! $user->hasRole($role)) {
            abort(403, 'Unauthorized');
            return;
        }

        session(['role' => $role]);

        return $next($request);
    }
}


