@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 offset-md-4 form-div mt-5">
            <form action="{{ action('IncidenciaController@nuevoCampo') }}" method="post">
            @csrf
                <div class="form-group">
                    <label for="asunto">Asunto</label>
                    <input type="text" name="asunto" class="form-control form-control-lg">
                </div>
                <div class="form-group">
                    <label for="cuerpo">Cuerpo</label>
                    <textarea name="cuerpo" class="form-control form-control-lg" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="crearIncidencia" class="btn btn-primary btn-block btn-lg">Agregar</button>
                </div>
                <p class="text-center"><a href="/agregar">Salir</a></p>
            </form>
        </div>
    </div>
</div>
@endsection