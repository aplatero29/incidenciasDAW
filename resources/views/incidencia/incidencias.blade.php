@extends('layouts.app')

@section('content')
<div class="container-fluid p-2 form-div">
  <a class="btn btn-success" href="/incidencias/crear">Añadir incidencia</a>
  <a class="btn btn-warning" href="/incidencias/pdf">Generar PDF</a>
  <br><br>
  @if(session('mensaje'))
  <div class="alert alert-success" role="alert">
    {{  session('mensaje') }}
  </div>
  @endif
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id Incidencia</th>
        <th>Id Profesor</th>
        <th>Asunto</th>
        <th>Cuerpo</th>
        <th>Fecha Creación</th>
        <th>Acciones</th>
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
        <td>
          <a class="btn btn-danger" onclick="return confirm('¿Deseas eliminar el mensaje?')" href="incidencias/eliminar/{{ $linea->id_inci }}">Eliminar</a>
          <a class="btn btn-info" href="/incidencias/detalle/{{ $linea->id_inci }}">Detalles</a>
        </td>
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