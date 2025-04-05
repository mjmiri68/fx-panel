<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
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

Route::get('/',HomeController::class)->name('home');

Route::get('/sign-up', function () {return view('register');})->name('register');
Route::get('/login', function () {return view('login');})->name('login');
Route::get('/forgot-password', function () {return view('forgot-password');})->name('forgot-password');
Route::get('/reset-password', function () {return view('reset-password');})->name('reset-password');
Route::get('/verify-email', function () {return view('verify-email');})->name('verify-email');
Route::get('/email-verified', function () {return view('email-verified');})->name('email-verified');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {return view('user.dashboard');})->name('dashboard');
});

// Admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {return view('admin.dashboard');})->name('admin.dashboard');
    Route::get('/admin/users', function () {return view('admin.users');})->name('admin.users');
});
