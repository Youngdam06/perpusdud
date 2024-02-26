<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request) 
    {
        $credentials = $request->validate([
            "email" => "required", 
            "password" => "required",
        ]);

        if(Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect('/'); // Atau rute ke dashboard admin
            } elseif ($user->level == 'petugas') {
                return redirect('/'); // Atau rute ke dashboard petugas
            } elseif ($user->level == 'tamu') {
                return redirect('/home'); // Atau rute ke dashboard tamu
            } else {
                return redirect()->back()->withErrors('email atau password salah!');
            }
        }else{
            return redirect()->back()->withErrors('email atau password salah!');
        }
    }

    // auth logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
