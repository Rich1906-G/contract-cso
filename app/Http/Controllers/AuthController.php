<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login()
    {
        return view('contract.login');
    }

    public function proses_login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // $kosong = $credentials = null;

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // // Redirect based on user type
            if (Auth::user()->type == 2) {
                return redirect()->route('contract.unitHead')->withSuccess('You have Successfully logged in');
            } else if (Auth::user()->type == 3) {
                return redirect()->route('contract.cae')->withSuccess('You have Successfully logged in');
            }

            return redirect()->intended('/contract')->withSuccess('You have Successfully logged in');
        }

        return redirect()->route('contract.login')->withError('Your username or password is incorrect');
    }

    public function logout(Request $request)
    {
        // Get the current user's information
        $user = Auth::user();

        // Log the user out
        Auth::logout();

        // Optionally, you can perform a redirect after logging out
        return redirect()->route('contract.login')->with('logout', 'You have been successfully logged out.');
    }
}
