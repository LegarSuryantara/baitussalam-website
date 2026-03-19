<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  mixed  ...$roles
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $userRole = Auth::user()->role;
        $userRoleStr = is_string($userRole) ? $userRole : $userRole->value ?? null;

        if (in_array($userRoleStr, [
            \App\UserRole::SUPER_ADMIN->value,
            \App\UserRole::TAKMIR_ADMIN->value,
            \App\UserRole::SEKRETARIS->value
        ])) {
            return $next($request);
        }

        if (!in_array($userRoleStr, $roles)) {
            abort(403, 'Akses tidak diizinkan untuk peran Anda.');
        }

        return $next($request);
    }
}
