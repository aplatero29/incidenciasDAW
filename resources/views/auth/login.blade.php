@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="correo" class="col-md-3 col-form-label text-md-left">{{ __('Email') }}</label>

                            <div class="col-md-9">
                                <input id="correo" type="email" class="form-control{{ $errors->has('correo') ? ' is-invalid' : '' }}" name="correo" value="{{ old('correo') }}" required autofocus>

                                @if ($errors->has('correo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('correo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contrasena" class="col-md-3 col-form-label text-md-left">{{ __('Contraseña') }}</label>

                            <div class="col-md-9">
                                <input id="contrasena" type="password" class="form-control{{ $errors->has('contrasena') ? ' is-invalid' : '' }}" name="contrasena" required>

                                @if ($errors->has('contrasena'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contrasena') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                            <div class="col-md mt-2">
                                <p class="text-center"><a href="{{ route('register')}}">¿No estás registrado?</a></p>
                            </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
