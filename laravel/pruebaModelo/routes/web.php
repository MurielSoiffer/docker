<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\PaisController;


Route::get('/saludo/controller/{nombre}', [SaludoController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
     echo "hola mundo";
});

Route::get('/saludo/vista', function () {
    return view('saludo');
});

// ------------------------------------------------------

Route::resource('pais', PaisController::class);
