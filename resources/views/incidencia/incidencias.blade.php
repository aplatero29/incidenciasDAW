@extends('layouts.app')

@section('content')
<div class="container-fluid p-2 form-div">
  <input class="form-control" type="number" name="cantidad">
  <a class="btn btn-success" href="/incidencias/crear">Añadir incidencia</a>
  <a class="btn btn-warning" href="/incidencias/pdf">Generar PDF</a>
  </br></br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id Incidencia</th>
        <th>Id Profesor</th>
        <th>Asunto</th>
        <th>Cuerpo</th>
        <th>Fecha Creación</th>
        @if (Auth::user()->admin == 1)
        <th>Acciones</th>
        @endif
      </tr>
    </thead>
    <tbody>
      @isset($incidencias)
      @foreach($incidencias as $linea)
      <tr>
        <td>{{$linea->id_inci}}</td>
        <td>{{$linea->id_prof}}</td>
        <td>{{$linea->asunto}}</td>
        <td>{{$linea->cuerpo}}</td>
        <td>{{$linea->fecha_creacion}}</td>
        <td><a class="btn btn-danger" href="incidencias/eliminar/{{ $linea->id_inci }}">Eliminar</a></td>
      </tr>
      @endforeach
      @endisset
    <tbody>

  </table>
  <div class="row">
    <div class="col-6">
      {{$incidencias->links()}}
    </div>

  </div>
</div>

@endsection