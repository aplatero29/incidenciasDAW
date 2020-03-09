@extends('layouts.app')

@section('content')
<div class="container-fluid p-2 form-div">
  <a class="btn btn-success" href="/mensajes/crear">Crear mensaje</a>
  <a class="btn btn-warning" href="/mensajes/pdf">Generar PDF</a>
  <br><br>
  @if(session('mensaje'))
  <div class="alert alert-success" role="alert">
    {{  session('mensaje') }}
  </div>
  @endif
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id Mensaje</th>
        <th>Id Remitente</th>
        <th>Id Destinatario</th>
        <th>Título</th>
        <th>Fecha Creación</th>
        <th>Acciones</th>
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
        <td>{{$linea->fecha_mensaje}}</td>
        <td>
            <a class="btn btn-danger" onclick="return confirm('¿Deseas eliminar el mensaje?')" href="mensajes/eliminar/{{ $linea->id_men }}">Eliminar</a>
            <a class="btn btn-info" href="mensajes/detalle/{{ $linea->id_men }}">Detalles</a>
        </td>
      </tr>
      @endforeach
      @endisset
    <tbody>

  </table>
  <div class="row">
    <div class="col-6">
      {{$mensajes->links()}}
    </div>

  </div>
</div>

@endsection