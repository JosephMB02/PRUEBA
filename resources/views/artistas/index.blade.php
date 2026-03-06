@extends('layouts.app')

@section('content')

<style>

.titulo-artistas{
    text-align:center;
    font-size:40px;
    font-weight:bold;
    margin-bottom:40px;
    color:#ff4d6d;
}

.contenedor-artistas{
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(280px,1fr));
    gap:30px;
}

.card-artista{
    background:linear-gradient(135deg,#1a1a1a,#2e2e2e);
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,0.5);
    transition:0.3s;
    text-align:center;
    color:white;
}

.card-artista:hover{
    transform:translateY(-10px) scale(1.03);
    box-shadow:0 20px 40px rgba(0,0,0,0.7);
}

.imagen-artista{
    width:100%;
    height:250px;
    object-fit:cover;
}

.info-artista{
    padding:20px;
}

.nombre-artista{
    font-size:24px;
    font-weight:bold;
    margin-bottom:10px;
    color:#ffd166;
}

.genero{
    font-size:16px;
    background:#ff4d6d;
    display:inline-block;
    padding:6px 14px;
    border-radius:20px;
    margin-top:10px;
}

.boton-ver{
    display:inline-block;
    margin-top:15px;
    background:#06d6a0;
    padding:10px 20px;
    border-radius:25px;
    color:black;
    text-decoration:none;
    font-weight:bold;
    transition:0.3s;
}

.boton-ver:hover{
    background:#ffd166;
}

</style>
<h1 class="titulo-artistas">Artistas</h1>
<div class="contenedor-artistas">
@foreach($artistas as $artista)
<div class="card-artista">
<img src="{{ asset($artista['imagen']) }}" class="imagen-artista">
<div class="info-artista">
<h3 class="nombre-artista">{{ $artista['nombre'] }}</h3>
<p class="genero">{{ $artista['genero'] }}</p>
<br>
<a href="{{ url('conciertos') }}" class="boton-ver">Ver conciertos</a>
</div>
</div>
@endforeach
</div>
@endsection