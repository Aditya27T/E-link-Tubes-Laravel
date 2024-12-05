<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
// use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
// use App\Http\Controllers\DashboardController;

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::get('register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
});

Route::post('logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'role:super_admin,admin'])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    // Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    // Route::get('users', [AdminDashboardController::class, 'users'])->name('admin.users');
    // Route::get('posts', [AdminDashboardController::class, 'posts'])->name('admin.posts');
    // Route::get('sentiment-analysis', [AdminDashboardController::class, 'sentimentAnalysis'])
    //     ->name('admin.sentiment');
});

// User Routes
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('home');
    })->name('dashboard');
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
});

// Fallback Route
Route::fallback(function () {
    return redirect()->route('login');
});