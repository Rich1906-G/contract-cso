<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Pastikan namespace dan nama model sesuai

class CheckRole
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user(); // Ambil objek user yang sedang login

            if ($user->role === 'admin') {
                // Redirect ke home nya admin
                return redirect()->route('contract.index');
            } else if ($user->role === 'unithead') {
                // Redirect ke home nya unithead
                return redirect()->route('contract.unitHead');
            } else if ($user->role === 'cae') {
                // Redirect ke halaman nya cae
                return redirect()->route('contract.cae');
            }

            // User tidak ada role
            return $next($request);
        }

        return $next($request);
    }
}
