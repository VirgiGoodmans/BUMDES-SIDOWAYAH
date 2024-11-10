<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::view('/profile', 'profile')->name('profile');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index');
Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/news', [AdminController::class, 'newsList'])->name('admin.news');
    Route::get('/admin/news/create', [AdminController::class, 'createNews'])->name('admin.news.create');
    Route::post('/admin/news', [AdminController::class, 'storeNews'])->name('admin.news.store');
    Route::get('/admin/news/edit/{id}', [AdminController::class, 'editNews'])->name('admin.news.edit');
    Route::put('/admin/news/{id}', [AdminController::class, 'updateNews'])->name('admin.news.update');
    Route::delete('/admin/news/{id}', [AdminController::class, 'destroyNews'])->name('admin.news.destroy');
    Route::get('/admin/pemesanan/confirm/{id}', [AdminController::class, 'confirmPemesanan'])->name('admin.pemesanan.confirm');
    Route::get('/admin/pemesanan/check', [AdminController::class, 'checkResi'])->name('admin.pemesanan.check');
});

Route::get('/wisata/{id}', [WisataController::class, 'show'])->name('wisata.show');
