@extends('layouts.app')

@section('content')
<div class="container-fluid p-2 form-div">
  <a class="btn btn-warning" href="/logs/pdf">Generar PDF</a>
  </br></br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id Profesor</th>
        <th>Usuario</th>
        <th>Acciones</th>
        <th>Fecha acción</th>
      </tr>
    </thead>
    <tbody>
      @isset($logs)
      @foreach($logs as $linea)
      <tr>
        <td>{{$linea->id_prof}}</td>
        <td>{{$linea->usuario}}</td>
        <td>{{$linea->accion}}</td>
        <td>{{$linea->fecha_accion}}</td>
      </tr>
      @endforeach
      @endisset
    <tbody>
  </table>
  
  <div class="row">
    <div class="col-6">
      {{$logs->links()}}
    </div>

  </div>
</div>

@endsection