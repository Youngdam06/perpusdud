<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistertamuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// route session
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/register-tamu', [RegistertamuController::class, 'index']);
Route::post('/register-tamu-post', [RegistertamuController::class, 'store'])->name('posregtamu');
Route::post('/post-register', [RegisterController::class, 'store'])->name('posreg');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/post-login', [LoginController::class, 'login'])->name('poslog');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::middleware(["auth"])->group(function() {
    Route::get('/', [DashboardController::class, 'page'])->name('dashboard');
    // route kelola data
    Route::resource('kelolaBuku', BukuController::class);
    Route::resource('kelolaPetugas', PetugasController::class);
    Route::resource('kelolaKategori', KategoriController::class);
    Route::get('/home', [Homecontroller::class, 'index']);
    Route::get('/show-buku/{id}', [BukuController::class, 'show'])->name('showBuku');
});
