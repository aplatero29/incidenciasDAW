<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Incidencias</title>
        <link
         rel="stylesheet"
         href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
         integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
         crossorigin="anonymous"
        >
    </head>
    <body>

        @section('navbar')
            @auth
            <nav class="navbar navbar-light bg-light p-2-3">
                <a class="navbar-brand">Hola, {{Auth::user()->usuario}}</a>
                <a class="navbar-item" href="/home">Inicio</a>
                <a class="navbar-item" href="/incidencias">Incidencias</a>
                <a class="navbar-item" href="/usuarios">Usuarios</a>
                <a class="navbar-item" href="index.php?accion=">Mensajes</a>
                <a class="navbar-item" href="/logs">Logs</a>
                <a class="navbar-item" href="/logout">Cerrar sesión</a>
            </nav>
            @endauth
        @show

        @yield('content')
    </body>
</html>
