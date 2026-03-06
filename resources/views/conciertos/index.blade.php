@extends('layouts.app') <!-- usa el layout -->

@section('content')

<style>

.titulo-principal{
    text-align:center;
    font-size:40px;
    font-weight:bold;
    color:#ff2e63;
    margin-bottom:40px;
}

.contenedor-conciertos{
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(300px,1fr));
    gap:30px;
}

.card-concierto{
    background:linear-gradient(135deg,#1f1f1f,#2b2b2b);
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,0.4);
    transition:0.3s;
    color:white;
}

.card-concierto:hover{
    transform:scale(1.05);
    box-shadow:0 15px 35px rgba(0,0,0,0.6);
}

.imagen-concierto{
    width:100%;
    height:220px;
    object-fit:cover;
}

.contenido-card{
    padding:20px;
    text-align:center;
}

.titulo-concierto{
    font-size:22px;
    font-weight:bold;
    margin-bottom:10px;
    color:#ffd369;
}

.descripcion{
    font-size:15px;
    color:#e0e0e0;
    margin-bottom:15px;
}

.boton-ver{
    display:inline-block;
    background:#ff2e63;
    padding:10px 20px;
    border-radius:25px;
    color:white;
    text-decoration:none;
    font-weight:bold;
    transition:0.3s;
}

.boton-ver:hover{
    background:#ffd369;
    color:black;
}

</style>

<h1 class="titulo-principal">Conciertos Disponibles</h1>
<div class="contenedor-conciertos">
@foreach($conciertos as $concierto) <!-- recorre conciertos -->

<div class="card-concierto">
    <img src="{{ asset($concierto['imagen']) }}" class="imagen-concierto">
    <div class="contenido-card">
        <h3 class="titulo-concierto">{{ $concierto['titulo'] }}</h3>
        <p class="descripcion">{{ $concierto['descripcion'] }}</p>
        <a href="{{ url('boletos') }}" class="boton-ver">Ver Boletos</a>
    </div>
</div>
@endforeach
</div>
@endsection