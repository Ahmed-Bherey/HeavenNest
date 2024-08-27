<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        if (auth()->guard('web')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ])) {
            return redirect()->route('dashboard.index')->with(['success' => 'مرحبا ' . Auth::user()->name]);
        } else {
            return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
        }
    }
}
