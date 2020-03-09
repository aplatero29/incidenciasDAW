<!DOCTYPE html>
<html lang="es">

<head>
    <title>Incidencias</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    @section('navbar')
    @auth
    <nav class="navbar navbar-light bg-light p-2-3">
        <a class="navbar-brand">Hola, {{Auth::user()->usuario}}</a>
        <a class="navbar-item" href="/home">Inicio</a>
        <a class="navbar-item" href="/incidencias">Incidencias</a>
        <a class="navbar-item" href="/usuarios">Usuarios</a>
        <a class="navbar-item" href="/mensajes">Mensajes</a>
        <a class="navbar-item" href="/logs">Logs</a>
        <a class="navbar-item" href="/logout">Cerrar sesión</a>
    </nav>
    @endauth
    @show

    @yield('content')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>