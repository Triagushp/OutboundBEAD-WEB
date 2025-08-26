<?php

use App\Http\Controllers\Admin\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserTestimoniController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ============================
// Halaman Landing Page
// ============================
Route::view('/', 'landingpage')->name('landing');

// ============================
// Halaman Auth
// ============================
Route::controller(AuthController::class)->group(function () {
    // Register
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'save')->name('register.save');

    // Login
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginAction')->name('login.action');

    // Logout (gunakan GET biar mudah dulu)
    Route::get('/logout', 'logout')->name('logout');
});

// ============================
// Halaman Utama (tanpa login)
// ============================
Route::view('/paket', 'paket')->name('paket');
Route::view('/pembayaran', 'pembayaran')->name('pembayaran');

// ============================
// Dashboard (harus login manual)
// ============================
Route::middleware(['web'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('dashboard')->group(function () {
        Route::view('/beranda', 'dashboard.beranda')->name('dashboard.beranda');
        Route::view('/paket', 'dashboard.paket')->name('dashboard.paket');
        Route::view('/pembayaran', 'dashboard.pembayaran')->name('dashboard.pembayaran');
        Route::view('/profil', 'dashboard.profil')->name('dashboard.profil');
    });
});

Route::middleware(['auth', 'role:user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    // Pendaftaran Outbound
    Route::get('/pendaftaran', [BookingController::class, 'myPendaftaran'])->name('pendaftaran');
    Route::get('/pendaftaran/create/{paket_id}', [BookingController::class, 'create'])->name('pendaftaran.create');
    Route::post('/pendaftaran', [BookingController::class, 'store'])->name('pendaftaran.store');
    Route::get('/pendaftaran/{id}', [BookingController::class, 'show'])->name('pendaftaran.show');
    Route::delete('/pendaftaran/{id}', [BookingController::class, 'cancel'])->name('pendaftaran.cancel');

    // Profil User
    Route::get('/profil', [UserController::class, 'profil'])->name('profil');
    Route::put('/profil/update', [UserController::class, 'updateProfil'])->name('profil.update');
});

// ============================
// Dashboard khusus Admin
// ============================
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Paket Outbound
    Route::get('/paket', [PaketController::class, 'index'])->name('paket.index');
    Route::get('/paket/create', [PaketController::class, 'create'])->name('paket.create');
    Route::post('/paket', [PaketController::class, 'store'])->name('paket.store');
    Route::get('/paket/{id}/edit', [PaketController::class, 'edit'])->name('paket.edit');
    Route::put('/paket/{id}', [PaketController::class, 'update'])->name('paket.update');
    Route::delete('/paket/{id}', [PaketController::class, 'destroy'])->name('paket.destroy');

    // Galeri
    Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
    Route::post('/galeri', [GaleriController::class, 'store'])->name('galeri.store');
    Route::delete('/galeri/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

    // // Event
    // Route::get('/event', [EventController::class, 'index'])->name('event.index');
    // Route::post('/event', [EventController::class, 'store'])->name('event.store');
    // Route::delete('/event/{id}', [EventController::class, 'destroy'])->name('event.destroy');

    // Testimoni
    Route::get('/testimoni', [UserTestimoniController::class, 'index'])->name('testimoni.index');
    Route::post('/testimoni', [UserTestimoniController::class, 'store'])->name('testimoni.store');
    Route::delete('/testimoni/{id}', [UserTestimoniController::class, 'destroy'])->name('testimoni.destroy');

    // Pendaftaran Outbound
    Route::get('/pendaftaran', [BookingController::class, 'index'])->name('pendaftaran.index');
    Route::get('/pendaftaran/{id}', [BookingController::class, 'show'])->name('pendaftaran.show');
    Route::delete('/pendaftaran/{id}', [BookingController::class, 'destroy'])->name('pendaftaran.destroy');
});
