<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoletosController extends Controller
{
    public function index()
    {
        // lista de boletos
        $boletos = [
            [
                "tipo"=>"GENERAL",
                "precio"=>"500"
            ],
            [
                "tipo"=>"VIP",
                "precio"=>"1,200"
            ],
            [
                "tipo"=>"FAN",
                "precio"=>"2,500"
            ]
        ];

        // manda datos a la vista
        return view('boletos.index', compact('boletos'));
    }
}
