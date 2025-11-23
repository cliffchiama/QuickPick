<?php
use App\Http\Controllers\CafeteriaController;

Route::get('/cafeteria', [CafeteriaController::class, 'index'])->name('cafeteria.index');
Route::get('/cafeteria/menu', [CafeteriaController::class, 'menu'])->name('cafeteria.menu');
Route::post('/cafeteria/order', [CafeteriaController::class, 'order'])->name('cafeteria.order');

