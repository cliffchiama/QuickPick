<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeteriaController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// Homepage
Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Auth::routes();

// Home dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Cafeteria routes
Route::prefix('cafeteria')->group(function () {

    // Cafeteria main page
    Route::get('/', [CafeteriaController::class, 'index'])->name('cafeteria.index');

    // Menu page
    Route::get('/menu', [CafeteriaController::class, 'menu'])->name('cafeteria.menu');

    // Place an order
    Route::post('/order', [CafeteriaController::class, 'order'])->name('cafeteria.order');
});
Route::get('/', function () {
    return view('welcome');
})->name('home');
