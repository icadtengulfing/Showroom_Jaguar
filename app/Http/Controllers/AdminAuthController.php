<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Auth\Events\Attempting;

class AdminAuthController extends Controller
{
    public function LoginView()
    {
        return view('admin.index');
    }

    public function login(Request $request)
    {
        // Validasi Input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        // Cek kredensial
        if (Auth::guard('admin')->attempt([
            'username' => $request->username,
            'password' => $request->password
        ])) {
            // ✅ Flash message sukses
            return redirect('/admin/dashboard')->with('success', 'Login berhasil!');
        }

        // ✅ Flash message error       
        return redirect('/admin')->with('error', 'Username atau Password salah!');
    }


    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin')->with('success', 'Anda telah logout!');
    }
}
