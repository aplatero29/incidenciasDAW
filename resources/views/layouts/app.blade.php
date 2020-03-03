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
            <nav class="navbar navbar-light bg-light p-2-3">
                <a class="navbar-brand">Hola, @isset($nombre) {{$nombre}} @endisset</a>
                <a class="navbar-item" href="index.php?accion=index">Inicio</a>
                <a class="navbar-item" href="index.php?accion=incidenciasAdmin">Incidencias</a>
                <a class="navbar-item" href="index.php?accion=listarUsuariosAdmin">Usuarios</a>
                <a class="navbar-item" href="index.php?accion=">Mensajes</a>
                <a class="navbar-item" href="index.php?accion=logs">Logs</a>
                <a class="navbar-item" href="index.php?accion=logout">Cerrar sesión</a>
            </nav>
        @show

        @yield('content')
    </body>
</html>