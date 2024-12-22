<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\AuthController;

Route::post('/register', [AuthController::class, 'register'])->name('api.v1.auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('api.v1.auth.login');

