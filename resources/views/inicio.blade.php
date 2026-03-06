<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Eventos Musicales</title>

<style>

/* fondo de la página */
body{
    margin:0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg,#141e30,#243b55);
    color:white;
}

/* encabezado */
header{
    text-align:center;
    padding:60px;
}

header h1{
    font-size:50px;
}

header p{
    font-size:20px;
    opacity:0.8;
}

/* contenedor de tarjetas */
.contenedor{
    display:flex;
    justify-content:center;
    gap:40px;
    margin-top:40px;
}

/* diseño de tarjeta */
.card{
    width:280px;
    border-radius:15px;
    overflow:hidden;
    background:rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    box-shadow:0px 10px 25px rgba(0,0,0,0.4);
    transition:0.3s;
    text-align:center;
}

/* animación */
.card:hover{
    transform:translateY(-10px) scale(1.05);
}

/* imagen de la tarjeta */
.card img{
    width:100%;
    height:180px;
    object-fit:cover;
}

/* contenido */
.card-body{
    padding:20px;
}

/* botones */
.boton{
    margin-top:10px;
    padding:10px 20px;
    border:none;
    border-radius:8px;
    font-size:16px;
    cursor:pointer;
    color:white;
}

/* colores */
.conciertos{ background:#ff4d4d; }
.artistas{ background:#28a745; }
.boletos{ background:#f39c12; }

footer{
    text-align:center;
    margin-top:70px;
    opacity:0.7;
}
</style>
</head>
<body>
<header>
<h1>Eventos Musicales Yucatán</h1>
<p>Descubre los conciertos de tus artistas favoritos y consulta el precio de los boletos al instante</p>
</header>
<div class="contenedor">

<div class="card">
<img src="{{ asset('img/conciertos.png') }}" alt="Conciertos">
<div class="card-body">
<h2>Conciertos</h2>
<p>Consulta los próximos conciertos disponibles.</p>
<a href="{{ url('conciertos') }}">
<button class="boton conciertos">Ver Conciertos</button>
</a>
</div>
</div>

<div class="card">
<img src="{{ asset('img/artistas.png') }}" alt="Artistas">
<div class="card-body">
<h2>Artistas</h2>
<p>Conoce los artistas invitados.</p>
<a href="{{ url('artistas') }}">
<button class="boton artistas">Ver Artistas</button>
</a>
</div>
</div>

<div class="card">
<img src="{{ asset('img/boletos.png') }}" alt="Boletos">
<div class="card-body">
<h2>Boletos</h2>
<p>Compra boletos para tus conciertos favoritos.</p>
<a href="{{ url('boletos') }}">
<button class="boton boletos">Comprar Boletos</button>
</a>

</div>
</div>
</div>

<footer>
<p>© 2026 Eventos Musicales | Proyecto Laravel</p>
</footer>
</body>
</html>