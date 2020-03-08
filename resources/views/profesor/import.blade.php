@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 offset-md-4 form-div mt-5">
            <form action="{{ action('UserController@import') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input title="HOLA" type="file" name="excel" accept=".xlsx" class="form-control-file" />
                </div>
                <div class="form-group">
                    <button type="submit" name="crearIncidencia"
                        class="btn btn-primary btn-block btn-lg">Agregar</button>
                </div>
                <p class="text-center"><a href="/usuarios">Salir</a></p>
            </form>
        </div>
    </div>
</div>
@endsection