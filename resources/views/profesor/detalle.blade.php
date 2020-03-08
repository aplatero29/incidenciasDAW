@extends('layouts.app')

@section('content')
<div class="container-fluid p-3 form-div">
    <br><br>
    @isset($profesor)
    @foreach($profesor as $linea)
    <h1 class="display-3">Detalles del usuario</h1>
    <ul class="list-group list-group-flush mt-5">
        <li class="list-group-item">Id Profesor - {{$linea->id_prof}}</li>
        <li class="list-group-item">Nombre - {{$linea->nombre}}</li>
        <li class="list-group-item">DNI - {{$linea->dni}}</li>
        <li class="list-group-item">Email - {{$linea->email}}</li>
        <li class="list-group-item">Usuario - {{$linea->usuario}}</li>
        <li class="list-group-item">Departamento - {{$linea->departamento}}</li>
        <li class="list-group-item">Fecha de registro - {{ date('d/m/Y', strtotime($linea->created_at)) }}</li>
    </ul>
    @endforeach
    @endisset
</div>

@endsection