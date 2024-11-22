<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bienvenido a ZONA GAMER</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Press Start 2P', cursive;
            background-image: url('/images/ghost.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        h1 {
            color: #00FF00; /* Color verde para el título */
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .button {
            background-color: #00FF00; /* Color verde para los botones */
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin: 10px;
            cursor: pointer;
            font-size: 1.2rem;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #00cc00; /* Color verde más oscuro al pasar el mouse */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido a tu blog favorito</h1>
        <h2>ZONA GAMER</h2>
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}" class="button">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="button">Iniciar Sesión</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="button">Registrar</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>
</html>