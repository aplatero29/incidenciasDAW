<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Listado Incidencias {{date('d/m/Y')}}</title>
</head>
<div class="container-fluid p-2 form-div">
    </br></br>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>Id Profesor</th>
                <th>Usuario</th>
                <th>Acciones</th>
                <th>Fecha acción</th>
            </tr>
        </thead>
        <tbody>
            @isset($incidencias)
            @foreach($incidencias as $linea)
            <tr>
                <td>{{$linea->id_prof}}</td>
                <td>{{$linea->usuario}}</td>
                <td>{{$linea->accion}}</td>
                <td>{{date('d/m/Y H:i:s', strtotime($linea->fecha_accion))}}</td>
            </tr>
            @endforeach
            @endisset
        <tbody>

    </table>
</div>