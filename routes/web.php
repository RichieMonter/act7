<?php

use Illuminate\Support\Facades\Route;

// Rutas de navegación principal (Actividad 11)
Route::get('/home', function () {
    return view('home');
});

Route::get('/photos', function () {
    return view('photos');
});

Route::get('/contact', function () {
    return view('contact');
});

// Ruta de prueba con condicionales y variables de Blade
Route::get('greeting', function () {
    $records = ['Record 1', 'Record 2'];
    return view('welcome', [
        'name' => 'Ricardo Fuentes Monter',
        'records' => $records
    ]);
});

// Ruta raíz que redirige al home
Route::get('/', function () {
    return redirect('/home');
});
