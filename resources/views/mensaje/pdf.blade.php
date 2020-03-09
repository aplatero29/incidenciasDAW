<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Listado Mensajes {{date('d/m/Y')}}</title>
</head>
<div class="container-fluid p-2 form-div">
    </br></br>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>Id Mensaje</th>
                <th>Id Remitente</th>
                <th>Id Destinatario</th>
                <th>Título</th>
                <th>Fecha Envío</th>
            </tr>
        </thead>
        <tbody>
            @isset($mensajes)
            @foreach($mensajes as $linea)
            <tr>
                <td>{{$linea->id_men}}</td>
                <td>{{$linea->id_remitente}}</td>
                <td>{{$linea->id_destinatario}}</td>
                <td>{{$linea->titulo}}</td>
                <td>{{date('d/m/Y H:i:s', strtotime($linea->fecha_mensaje))}}</td>
            </tr>
            @endforeach
            @endisset
        <tbody>

    </table>
</div>