<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Auth::check()) {
            return redirect('/login'); // Redirect unauthenticated users to login
        }

        $user = Auth::user();

        // Check if the user's role matches the required role
        if ($user->role !== $role) {
            abort(403, 'Unauthorized action.'); // Forbid access if the role doesn't match
        }

        return $next($request);
    }
}
