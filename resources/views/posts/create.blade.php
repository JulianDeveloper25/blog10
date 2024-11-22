@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

<div class="container">
    <h1 class="text-success" style="font-family: 'Press Start 2P', cursive;">Agregar Publicación</h1>
    <section class="mt-3">
        <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card bg-dark text-light border border-success p-3">
                <div class="mb-3">
                    <label for="title" class="form-label text-success">Título</label>
                    <input class="form-control bg-dark text-light border-success" type="text" name="title" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label text-success">Descripción</label>
                    <textarea class="form-control bg-dark text-light border-success" name="description" id="floatingTextarea" cols="30" rows="10" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label text-success">Agregar Imagen</label>
                    <input class="form-control bg-dark text-light border-success" type="file" name="image" accept="image/*" required>
                </div>

                <button class="btn btn-success m-3" style="font-family: 'Press Start 2P', cursive;">Guardar</button>
            </div>
        </form>
    </section>
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
    .alert {
        background-color: rgba(255, 0, 0, 0.8); /* Fondo de alerta rojo */
        border: 1px solid #FF0000; /* Borde rojo */
    }
    .form-control {
        background-color: #1a1a1a; /* Fondo oscuro para campos de entrada */
        border: 1px solid #39FF14; /* Borde verde brillante */
    }
    .form-control:focus {
        border-color: #39FF14; /* Borde verde brillante en foco */
        box-shadow: 0 0 0 0.2rem rgba(57, 255, 20, 0.25); /* Sombra verde */
    }
</style>
@endsection