<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AccessLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        // Cek apakah pengguna sudah login dan memiliki level akses yang sesuai
        if (Auth::check() && Auth::user()->type === $userType) {
            return $next($request);
        }

        // Jika tidak memiliki akses, redirect ke halaman login atau halaman error
        return redirect('/login')->withErrors('Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}
