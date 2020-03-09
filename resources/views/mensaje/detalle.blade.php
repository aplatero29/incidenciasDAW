@extends('layouts.app')

@section('content')
<div class="container-fluid p-3 form-div">
    <br><br>
    @isset($mensaje)
    @foreach($mensaje as $linea)
    <h1 class="display-3">Detalles del mensaje</h1>
    <ul class="list-group list-group-flush mt-5">
        <li class="list-group-item">Id Mensaje - {{$linea->id_men}}</li>
        <li class="list-group-item">Id Remitente - {{$linea->id_remitente}}</li>
        <li class="list-group-item">Id Destinatario - {{$linea->id_destinatario}}</li>
        <li class="list-group-item">Título - {{$linea->titulo}}</li>
        <li class="list-group-item">Cuerpo - {{$linea->cuerpo}}</li>
        <li class="list-group-item">Fecha de Envío - {{ date('d/m/Y', strtotime($linea->fecha_mensaje)) }}</li>
    </ul>
    @endforeach
    @endisset
</div>

@endsection