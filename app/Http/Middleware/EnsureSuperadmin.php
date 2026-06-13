<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class EnsureSuperadmin
{
    /**
     * Handle an incoming request.
     * - allow only users with role `superadmin` to proceed
     * - otherwise: clear cache, logout, invalidate session and redirect to landing
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if ($user && isset($user->role) && $user->role === 'superadmin') {
            return $next($request);
        }

        // Clear application cache and logout the user if any
        try {
            Cache::flush();
        } catch (\Throwable $e) {
            // ignore
        }

        if (Auth::check()) {
            Auth::logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
