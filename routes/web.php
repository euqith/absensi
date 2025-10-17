<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);

Route::get('/dashboard', function () {
    // Halaman dashboard atau view yang sesuai
    return view('dashboard'); // Gantilah ini dengan view dashboard yang sudah kamu buat
})->name('dashboard');
