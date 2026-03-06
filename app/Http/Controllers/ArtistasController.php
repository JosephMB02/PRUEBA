<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistasController extends Controller
{
    public function index()
    {
        // lista de artistas
        $artistas = [
            [
                "nombre" => "Coldplay",
                "genero" => "Rock alternativo",
                "imagen" => "img/coldplay.png"
            ],
            [
                "nombre" => "Taylor Swift",
                "genero" => "Pop",
                "imagen" => "img/taylor.png"
            ]
        ];

        // envía los datos a la vista
        return view('artistas.index', compact('artistas'));
    }
}
