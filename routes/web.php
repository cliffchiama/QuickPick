<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('/admin/test', function () {
    return "Admin area - Middleware working!";
})->middleware(['auth', 'role:admin']);

Route::get('/staff/test', function () {
    return "Staff area - Middleware working!";
})->middleware(['auth', 'role:staff']);

Route::get('/student/test', function () {
    return "Student area - Middleware working!";
})->middleware(['auth', 'role:student']);

// Profile routes
Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->middleware('auth');