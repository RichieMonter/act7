<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Landing Page pública para usuarios invitados (guests)
Route::get('/', function () {
    return view('landingpage');
})->name('landing');

// Rutas de autenticación
Auth::routes();

// Dashboard protegido con middleware 'auth'
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Redirección de /home a /dashboard
Route::get('/home', function () {
    return redirect()->route('dashboard');
});