<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class murielController extends Controller
{
    public function index() {
        $colores = Color::all();
        return view('colores.index', compact('colores'));
    }
}
