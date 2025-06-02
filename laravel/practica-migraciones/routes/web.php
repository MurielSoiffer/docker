<?php

use App\Http\Controllers\murielController;
use Illuminate\Support\Facades\Route;
use App\Models\Color;

Route::get('/', function () {
    return view('welcome');
});
 
//-------------------Probar nueva vista------------------
Route::get('/usuarios', function () {
    return view('usuarios');
});
//-------------------Probar nuevo controlador------------------
Route::get('/colores', [murielController::class, 'index']);

//-------------------Probar nuevo modelo------------------
Route::get('/test-color', function () {
    $color = Color::create([
        'color' => 'Rojo',
        'email' => 'rojo@gmail.com',
        'password' => 'contraseña',
    ]);

    return $color;
});