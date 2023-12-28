<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.index', [
            'title' => 'Login',
            'active'=>'login'
        ]);
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return back()->with('message', 'Email not found');
        }

        if (password_verify($credentials['password'], $user->password)) {
            if (Auth::loginUsingId($user->id)) {
                $request->session()->regenerate();

                if ($user->role === 'admin') {
                    return redirect()->intended('/admin/dashboard');
                } elseif ($user->role === 'user') {
                    return redirect()->intended('/user/dashboard');
                }
            }
        }

        return back()->with('message', 'Wrong Password or Email')->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout() {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}