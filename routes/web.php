<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FasilitasSiblarakController;

// Rute login dan autentikasi
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::view('/profile', 'profile')->name('profile');

// Halaman beranda
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute pemesanan
Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index');
Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');

// Rute news
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

// Rute untuk fasilitas di Siblarak
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/fasilitas-siblarak', [FasilitasSiblarakController::class, 'index'])->name('admin.fasilitas-siblarak.index');
    Route::get('/admin/fasilitas-siblarak/create', [FasilitasSiblarakController::class, 'create'])->name('admin.fasilitas-siblarak.create');
    Route::post('/admin/fasilitas-siblarak/store', [FasilitasSiblarakController::class, 'store'])->name('admin.fasilitas-siblarak.store');
    Route::get('/admin/fasilitas-siblarak/{id}/edit', [FasilitasSiblarakController::class, 'edit'])->name('admin.fasilitas-siblarak.edit');
    Route::put('/admin/fasilitas-siblarak/{id}', [FasilitasSiblarakController::class, 'update'])->name('admin.fasilitas-siblarak.update');
    Route::delete('/admin/fasilitas-siblarak/{id}', [FasilitasSiblarakController::class, 'destroy'])->name('admin.fasilitas-siblarak.destroy');
});

// Rute konfirmasi pemesanan dan cek resi
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/pemesanan/confirm/{id}', [AdminController::class, 'confirmPemesanan'])->name('admin.pemesanan.confirm');
    Route::get('/admin/pemesanan/check', [AdminController::class, 'checkResi'])->name('admin.pemesanan.check');
});

// Rute halaman wisata
Route::get('/wisata/{id}', [WisataController::class, 'show'])->name('wisata.show');
