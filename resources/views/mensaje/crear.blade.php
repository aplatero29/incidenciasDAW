@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 offset-md-4 form-div mt-5">
            <form action="{{ action('MensajeController@nuevoCampo') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" class="form-control form-control-lg">
                </div>
                <div class="form-group">
                    <label for="cuerpo">Cuerpo</label>
                    <textarea name="cuerpo" class="form-control form-control-lg" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="destinatario">Text</label>
                    <select id="destinatario" class="custom-select" name="destinatario">
                        <option selected value="0">Elija un destinatario</option>
                        @foreach ($destinatarios as $opcion)
                        <option value="{{ $opcion->id_prof }}">{{ $opcion->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" name="crearIncidencia"
                        class="btn btn-primary btn-block btn-lg">Agregar</button>
                </div>
                <p class="text-center"><a href="/memsajes/agregar">Salir</a></p>
            </form>
        </div>
    </div>
</div>
@endsection