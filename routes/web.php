<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ConciertosController;
use App\Http\Controllers\ArtistasController;
use App\Http\Controllers\BoletosController;

// página principal
Route::get('/', [InicioController::class, 'index']);
//Rutas de cada seccion
Route::get('/conciertos', [ConciertosController::class, 'index']);
Route::get('/artistas', [ArtistasController::class, 'index']);
Route::get('/boletos', [BoletosController::class, 'index']);