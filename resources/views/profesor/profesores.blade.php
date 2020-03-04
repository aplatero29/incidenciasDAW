@extends('layouts.app')

@section('content')
<div class="container-fluid p-2 form-div">
    </br></br>
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
            @if($linea->admin == 0)
            <a class="btn btn-danger" href="hacerAdmin/{{ $linea->id_prof }}">Hacer admin</a>
            @endif
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