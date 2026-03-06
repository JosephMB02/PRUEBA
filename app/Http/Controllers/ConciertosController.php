<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConciertosController extends Controller
{
    public function index()
    {
        // arreglo con datos de conciertos
        $conciertos = [
            [
                "titulo" => "Rock Fest",
                "descripcion" => "Concierto de rock en vivo",
                "imagen" => "img/rock.png"
            ],
            [
                "titulo" => "Pop Night",
                "descripcion" => "Evento de música pop",
                "imagen" => "img/pop.png"
            ]
        ];
        // envía los datos a la vista
        return view('conciertos.index', compact('conciertos'));
    }
}
