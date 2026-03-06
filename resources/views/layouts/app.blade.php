<!DOCTYPE html>
<html>
<head>
    <title>Eventos Musicales</title>
</head>
<body>
<!-- menú -->
<nav>
    <a href="{{ url('/') }}">Inicio</a> |
    <a href="{{ url('conciertos') }}">Conciertos</a> |
    <a href="{{ url('artistas') }}">Artistas</a> |
    <a href="{{ url('boletos') }}">Boletos</a>
</nav>
<hr>
<!-- contenido de cada página -->
@yield('content')
<hr>
<footer>
    <p>© 2026 Eventos Musicales | Proyecto Laravel</p>
</footer>
</body>
</html>