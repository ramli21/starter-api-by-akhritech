<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     * Usage: ->middleware('role:superadmin') or register as 'role' in Kernel.
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        $user = $request->user();

        if (! $user) {
            abort(401);
        }

        if ($user->role !== $role) {
            abort(403);
        }

        return $next($request);
    }
}
