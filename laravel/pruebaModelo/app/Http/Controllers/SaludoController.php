<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function index(string $nombre) {
        return view('nombre')
        ->with("nombre",$nombre);;
    }
}
