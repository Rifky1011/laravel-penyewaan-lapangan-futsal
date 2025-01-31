<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

// Redirect ke halaman login jika belum login
Route::get('/', function () {
    return redirect()->route('login');
});

// Autentikasi
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/lapangan', function () {
        return view('lapangan');
    })->name('lapangan');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('lapangan', LapanganController::class)->middleware('role:admin');
    Route::resource('penyewaan', PenyewaanController::class);

    // Route::middleware(['role:user'])->group(function () {
    Route::group(['middleware' => ['role:user']], function () {
        Route::get('/penyewaan', [PenyewaanController::class, 'index'])->name('penyewaan.index');  // Daftar penyewaan
        Route::get('/penyewaan/create', [PenyewaanController::class, 'create'])->name('penyewaan.create');  // Form penyewaan
        Route::post('/penyewaan/store', [PenyewaanController::class, 'store'])->name('penyewaan.store2');  // Proses penyewaan
        Route::get('/penyewaan/hitung-harga/{lapangan_id}', [PenyewaanController::class, 'hitungHarga']);
    });

    Route::get('/admin', function () {
        return "admin page";
    })->name('admin');

    Route::get('/user', function () {
        return "user page";
    })->name('user');
});

require __DIR__.'/auth.php';
