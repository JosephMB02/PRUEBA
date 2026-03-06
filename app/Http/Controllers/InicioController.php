<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    // método que muestra la vista principal
    public function index()
    {
        // carga la vista inicio.blade.php
        return view('inicio');
    }
}
