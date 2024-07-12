<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'login']);


Route::get('/register', function () {
    return view('daftar');
});

Route::get('/helo', function () {
    return view('daftar');
});
