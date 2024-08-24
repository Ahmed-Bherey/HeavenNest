<?php

namespace App\Http\Controllers\User\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
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

        if (auth()->guard('web')->attempt($credentials)) {
            // Authentication successful
            $userName = auth()->guard('web')->user()->name;
            return redirect()->route('index')->with('success', "مرحبا $userName");
        }

        // Authentication failed
        return redirect()->back()->with('error', 'هناك خطأ بالبيانات');
    }
}
