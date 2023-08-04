<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserViewController;

Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();

// Redirige al CRUD de usuarios después de iniciar sesión
Route::get('/home', function () {
    return redirect()->route('users.index');
})->name('home');

// Rutas protegidas por autenticación para el CRUD de usuarios
Route::middleware(['auth'])->prefix('/view')->group(function () {
    Route::get('/users', [UserViewController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserViewController::class, 'create'])->name('users.create');
    Route::post('/users', [UserViewController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [UserViewController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserViewController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserViewController::class, 'destroy'])->name('users.destroy');
});