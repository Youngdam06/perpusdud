<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class DashboardController extends Controller
{
    public function page() 
    {
        $buku = Buku::count();
        return view('/dashboard', compact('buku'));
    }
}
