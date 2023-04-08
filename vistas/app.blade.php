<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <a class="navbar-brand">
                <img src="assets/img/logo.png" alt="" width="30" height="24">
                Ahorcado
            </a>
            @section('navbar')
            <div class="container justify-content-around">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="juego.php?botonnuevapartida">Nueva Partida</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="juego.php?botonpuntuacionpartidas">Puntuación Partidas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ (is_null($usuario) ?: $usuario->getNombre()) }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="index.php?botonlogout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            @show
        </nav>
        @yield('mensaje')
        @yield('content')
        <!-- Scripts -->
        <script src="assets/js/bootstrap/bootstrap.min.js"></script>
        <script src="assets/js/jquery/jquery-3.6.0.min.js"></script>
    </body>
</html>