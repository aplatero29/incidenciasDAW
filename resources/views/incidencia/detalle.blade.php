@extends('layouts.app')

@section('content')
<div class="container-fluid p-3 form-div">
    <br><br>
    @isset($incidencia)
    @foreach($incidencia as $linea)
    <h1 class="display-3">Detalles de la incidencia</h1>
    <ul class="list-group list-group-flush mt-5">
        <li class="list-group-item">Id Incidencia - {{$linea->id_inci}}</li>
        <li class="list-group-item">Id Profesor - {{$linea->id_prof}}</li>
        <li class="list-group-item">Asunto - {{$linea->asunto}}</li>
        <li class="list-group-item">Cuerpo - {{$linea->cuerpo}}</li>
        <li class="list-group-item">Fecha de creación - {{ date('d/m/Y', strtotime($linea->fecha_creacion)) }}</li>
    </ul>
    @endforeach
    @endisset
</div>

@endsection