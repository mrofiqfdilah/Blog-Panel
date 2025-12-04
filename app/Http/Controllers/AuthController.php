<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class AuthController extends Controller
{
    public function auth_view()
    {
        return view('auth.signin');
    }

    public function auth_store(Request $request)
    {
        $email = filter_var($request->email, FILTER_SANITIZE_EMAIL);
        $password = trim($request->password);

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $key = Str::lower($email) . '|' . $request->ip();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            return back()->withErrors([
                'email' => 'Too many login attempts, please try again later.'
            ]);
        }

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            RateLimiter::clear($key);
            return redirect('admin/dashboard');
        }

        RateLimiter::hit($key, 60);

        return back()->withErrors([
            'email' => 'Invalid email or password!',
        ]);
    }
}
