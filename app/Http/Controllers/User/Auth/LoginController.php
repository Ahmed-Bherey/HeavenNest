<?php

namespace App\Http\Controllers\User\Auth;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('user.pages.auth.login');
    }

    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only('email', 'password');

        if (auth()->guard('client')->attempt($credentials)) {
            // Authentication successful
            $userName = auth()->guard('client')->user()->name;
            return redirect()->route('index')->with('success', "مرحبا $userName");
        }

        // Authentication failed
        return redirect()->back()->with('error', 'هناك خطأ بالبيانات');
    }

    public function registerForm()
    {
        return view('user.pages.auth.register');
    }

    public function register(Request $request)
    {
        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('web.login')->with('success', 'تم انشاء حسابك بنجاح , يمكنك الان تسجيل الدخول');
    }
}
