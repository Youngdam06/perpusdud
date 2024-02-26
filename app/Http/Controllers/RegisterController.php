<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|max:90|unique:users',
            'password' => 'required|min:2|max:225',
            // 'level' => 'required|in:admin,petugas',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        // $validatedData['level'] = $request->input('level', 'admin');

        User::create($validatedData);

        return redirect('/login');
    }
}
