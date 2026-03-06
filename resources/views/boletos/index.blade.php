@extends('layouts.app')

@section('content')

<style>

.titulo-boletos{
    text-align:center;
    font-size:40px;
    margin-bottom:40px;
    color:#ff7b00;
}

/* contenedor */
.contenedor-boletos{
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
    gap:30px;
}

/* tarjeta tipo boleto */
.card-boleto{
    background:linear-gradient(135deg,#ff416c,#ff4b2b);
    border-radius:20px;
    padding:25px;
    color:white;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,0.4);
    transition:0.3s;
    position:relative;
    overflow:hidden;
}

/* efecto al pasar mouse */
.card-boleto:hover{
    transform:translateY(-10px) scale(1.05);
}

/* decoración tipo ticket */
.card-boleto::before{
    content:"🎫";
    position:absolute;
    font-size:80px;
    opacity:0.1;
    top:10px;
    right:10px;
}

/* tipo de boleto */
.tipo{
    font-size:24px;
    font-weight:bold;
}

/* precio */
.precio{
    font-size:30px;
    margin:15px 0;
    color:#ffe066;
}

/* boton */
.boton-comprar{
    background:white;
    color:#ff416c;
    border:none;
    padding:10px 20px;
    border-radius:25px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

.boton-comprar:hover{
    background:#ffe066;
    color:black;
}

</style>

<h1 class="titulo-boletos">Compra tus Boletos</h1>
<div class="contenedor-boletos">
@foreach($boletos as $boleto)
<div class="card-boleto">
<h3 class="tipo">{{ $boleto['tipo'] }}</h3>
<p class="precio">$ {{ $boleto['precio'] }}</p>
<button class="boton-comprar">Comprar Boleto</button>
</div>
@endforeach
</div>
@endsection