<?php

use App\Http\Controllers\Color;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{nombre}/{edad}/{ciudad}', [Color::class, 'index']);