@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-dark text-light border border-success">
                <div class="card-header text-center">
                    <h2 class="text-success" style="font-family: 'Press Start 2P', cursive;">Registro</h2>
                    <h5 style="font-family: 'Press Start 2P', cursive;">Crea tu cuenta</h5>
                </div>

                <div class="card-body bg-dark">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label text-success">{{ __('Nombre') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-dark border-success text-success"><i class="fas fa-user"></i></span>
                                <input id="name" type="text" class="form-control bg-dark text-light @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label text-success">{{ __('Correo Electrónico') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-dark border-success text-success"><i class="fas fa-envelope"></i></span>
                                <input id="email" type="email" class="form-control bg-dark text-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label text-success">{{ __('Contraseña') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-dark border-success text-success"><i class="fas fa-lock"></i></span>
                                <input id="password" type="password" class="form-control bg-dark text-light @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="form-label text-success">{{ __('Confirmar Contraseña') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-dark border-success text-success"><i class="fas fa-lock"></i></span>
                                <input id="password-confirm" type="password" class="form-control bg-dark text-light" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-0 text-center">
                            <button type="submit" class="btn btn-success w-100" style="font-family: 'Press Start 2P', cursive;">
                                {{ __('Registrar') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #121212; /* Fondo oscuro */
        font-family: 'Press Start 2P', cursive; /* Fuente gamer */
    }
    .btn-success {
        background-color: #39FF14; /* Verde brillante */
        border-color: #39FF14;
    }
    .btn-success:hover {
        background-color: #32CD32; /* Verde más oscuro */
        border-color: #28a745;
    }
    .form-control {
        border: 1px solid #39FF14;        border: 1px solid #39FF14; /* Borde verde brillante */
    }
    .form-control:focus {
        border-color: #39FF14; /* Borde verde brillante en foco */
        box-shadow: 0 0 0 0.2rem rgba(57, 255, 20, 0.25); /* Sombra verde */
    }
    .input-group-text {
        background-color: #1a1a1a; /* Fondo oscuro para el icono */
        border: 1px solid #39FF14; /* Borde verde brillante */
    }
</style>
@endsection