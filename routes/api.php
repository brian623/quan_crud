<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// Rutas públicas sin autenticación
Route::post('/login', [AuthController::class, 'login']);

// Rutas protegidas por autenticación JWT
Route::middleware(['jwt.auth'])->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/users', [UserController::class, 'store']);
    Route::put('/users/{id}', [UserController::class, 'update']);
    Route::delete('/users/{id}', [UserController::class, 'destroy']);
    Route::get('/user', [AuthController::class, 'user']);
});

