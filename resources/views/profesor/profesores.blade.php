@extends('layouts.app')

@section('content')
<div class="container-fluid p-2 form-div">
  <div class="dropright mt-2">
    <a class="btn btn-success" href="/usuarios/crear">Crear profesor</a>
    <button class="btn btn-success dropdown-toggle" type="button" id="menu" data-toggle="dropdown" aria-haspopup="true"
      aria-expanded="false">
      Excel
    </button>
    <div class="dropdown-menu" aria-labelledby="menu">
      <a class="dropdown-item" href="/usuarios/exportarexcel">Exportar</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="/usuarios/importar">Importar</a>
    </div>
    
  </div>
  
  <br><br>
  @if(session('mensaje'))
  <div class="alert alert-success" role="alert">
    {{  session('mensaje') }}
  </div>
  @endif
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id Profesor</th>
        <th>Nombre</th>
        <th>DNI</th>
        <th>Email</th>
        <th>Usuario</th>
        <th>Departamento</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @isset($profesores)
      @foreach($profesores as $linea)
      <tr>
        <td>{{$linea->id_prof}}</td>
        <td>{{$linea->nombre}}</td>
        <td>{{$linea->dni}}</td>
        <td>{{$linea->email}}</td>
        <td>{{$linea->usuario}}</td>
        <td>{{$linea->departamento}}</td>
        <td>
          @if($linea->admin == 0 && Auth::user()->admin == 1)
          <!-- Si el usuario mostrado no es admin y el usuario logueado si -->
          <a class="btn btn-danger" href="/usuarios/admin/{{ $linea->id_prof }}">Hacer admin</a>
          <a class="btn btn-warning" href="/usuarios/actualizar/{{ $linea->id_prof }}">Actualizar</a>
          <a class="btn btn-danger" onclick="return confirm('¿Deseas eliminar al profesor/a?')" href="/usuarios/eliminar/{{ $linea->id_prof }}">Eliminar</a>
          @endif
          <a class="btn btn-info" href="/usuarios/detalle/{{ $linea->id_prof }}">Detalles</a>
        </td>
      </tr>
      @endforeach
      @endisset
    <tbody>

  </table>
  <div class="row">
    <div class="col-6">
      {{$profesores->links()}}
    </div>

  </div>
</div>

@endsection