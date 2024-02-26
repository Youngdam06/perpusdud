<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistertamuController extends Controller
{
    public function index()
    {
        return view('auth.registertamu');
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|max:90|unique:users',
            'password' => 'required|min:2|max:225',
        ]);

        // Menambahkan nilai 'level' secara langsung ke data yang akan dibuat
        $validatedData['level'] = 'tamu';
    
        // Mengenkripsi password
        $validatedData['password'] = Hash::make($validatedData['password']);
    
        // Membuat pengguna baru dengan data yang telah divalidasi
        User::create($validatedData);    
        return redirect('/login');
    }
}
