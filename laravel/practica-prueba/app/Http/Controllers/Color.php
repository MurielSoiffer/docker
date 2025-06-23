<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Color extends Controller
{
    public function index(string $nombre, int $edad, string $ciudad){
        $datos =[
            [
                'id' => 1,
                'nombre' => $nombre,
                'edad' => $edad,
                'ciudad' => $ciudad
            ],
            [
                'id' => 2,
                'nombre' => 'María García',
                'edad' => 25,
                'ciudad' => 'Córdoba'
            ],
        ];
        return view('salas',compact('datos'));
    }
}
