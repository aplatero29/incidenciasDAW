@extends('layouts.app')

@section('content')
<br><br><br><br>

<div class="container">
  <div class="row d-flex justify-content-md-center">
    <div class="col-md-6 text-center">
      <h1>Página oficial de incidencias I.E.S Sán Sebastián</h1>
      @auth
      <h2>Bienvenid@ {{Auth::user()->nombre}} </h2>
      @endauth
      <h3>Son las {{ date("H:i") }}, a fecha de {{ date("d/m/Y") }}</h3>
    </div>
  </div>
</div>
@endsection