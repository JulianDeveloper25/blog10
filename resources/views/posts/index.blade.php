@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

<div class="container">
    <div class="titlebar">
        <a class="btn btn-success float-end mt-3" href="{{ route('posts.create') }}" role="button">Agregar</a>
        <h1 class="text-success" style="font-family: 'Press Start 2P', cursive;">Blog</h1>
    </div>

    <hr>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="row mb-4">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2">
                            <img class="img-fluid" style="max-width: 100%; border-radius: 10px;" src="{{ asset('images/' . $post->image) }}" alt="">
                        </div>
                        <div class="col-10">
                            <h4 class="text-success" style="font-family: 'Press Start 2P', cursive;">{{ $post->title }}</h4>
                            <p class="text-light">{{ $post->description }}</p>
                        </div>
                    </div>
                    <hr class="bg-success">
                </div>
            </div>
        @endforeach
    @else
        <p class="text-light">No se encontraron publicaciones.</p>
    @endif
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
        background-color: rgba(57, 255, 20, 0.8); /* Fondo de alerta verde */
        border: 1px solid #39FF14; /* Borde verde brillante */
    }
    .text-light {
        color: #ffffff; /* Texto blanco */
    }
    hr {
        border-top: 1px solid #39FF14; /* Línea horizontal verde brillante */
    }
</style>
@endsection