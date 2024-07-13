<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);


Route::get('/register', function () {
    return view('daftar');
});


Route::middleware(['CekLoginMiddleware'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    }); 
});