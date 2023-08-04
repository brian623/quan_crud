<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Quan Service
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @if (request()->is('/'))
        <main class="py-4">
            <div class="container">
                <h1 class="text-center">Bienvenido a Administrador de Usuarios Quan</h1>
                <p class="lead text-center">Este CRUD de usuarios permite administrar los usuarios del sistema.</p>
                <p class="text-center">Para comenzar a usarlo, sigue las siguientes instrucciones:</p>
                <ol>
                    <li>Regístrate o inicia sesión para acceder al CRUD.</li>
                    <li>En la página principal, verás la tabla con los usuarios registrados.</li>
                    <li>Utiliza los botones de "Editar" y "Eliminar" en cada fila para modificar o eliminar un usuario.</li>
                    <li>Para agregar un nuevo usuario, haz clic en "Agregar Usuario" en la parte superior de la tabla.</li>
                </ol>
            </div>
        </main>
        @endif

       <main class="py-4">
            @yield('content')
       </main>

        @if (request()->is('/'))
        <footer class="bg-light py-4">
            <div class="container text-center">
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Empezar</a>
            </div>
        </footer>
        @endif
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
