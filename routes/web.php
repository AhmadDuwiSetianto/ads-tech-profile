<?php

use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// 1. Halaman Utama (Home)
Route::get('/', [CompanyProfileController::class, 'index'])->name('home');

// Rute Halaman Detail per Tab (Multi-Page Navigation)
Route::get('/services', [CompanyProfileController::class, 'services'])->name('services');
Route::get('/portfolio', [CompanyProfileController::class, 'portfolio'])->name('portfolio');
Route::get('/about', [CompanyProfileController::class, 'about'])->name('about');
Route::get('/process', [CompanyProfileController::class, 'process'])->name('process');
Route::get('/faq', [CompanyProfileController::class, 'faq'])->name('faq');

// ==========================================
// KUSTOMISASI URL LOGIN RAHASIA (Ganti '/ads-sec-portal' sesuka Anda)
// ==========================================
Route::middleware('guest')->group(function () {
    Route::get('/ads-sec-portal', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/ads-sec-portal', [AuthenticatedSessionController::class, 'store']);
});

// 2. Tangani redirect bawaan sistem Laravel Breeze (Jika user ketik /dashboard)
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

// 3. Panel Admin & CRUD (Hanya bisa diakses jika sudah login)
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('services', ServiceController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('faqs', FaqController::class);
});

// Kustomisasi URL Login & Logout Rahasia
Route::middleware('guest')->group(function () {
    Route::get('/ads-sec-portal', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/ads-sec-portal', [AuthenticatedSessionController::class, 'store']);
});

// TAMBAHKAN BARIS INI (Agar tombol Logout di Admin Layout berfungsi kembali)
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');