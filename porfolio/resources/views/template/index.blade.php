<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= url('../../css/style.css '); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barriecito&display=swap');
    </style>
    <title>@yield('title') :: Sebastian Servente</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <picture class="picture__img w-10">
                <source media="(min-width: 751px)" srcset="<?= url('../img/logo.png'); ?>"<?= url('../img/logo.png'); ?>>
                <source media="(min-width: 380px)" srcset="<?= url('../img/logo.png'); ?>">
                <img src="<?= url('../img/logo.png'); ?>" class="m-auto" alt="Mi imagen responsive">
            </picture>
            <button class="navbar-toggler text-warning " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse {{--flex-row-reverse--}} textMenu p-1" id="navbarNav">
                {{--<ul class="navbar-nav ">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('info') }}">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                    </li>
                    @auth

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('equipos') }}" >Equipos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('carrito', ['user' => Auth::id()]) }}" >Mi Carrito</a>
                        </li>
                        <li class="nav-item d-flex align-items-center li__main">
                            <a class="nav-link"
                               href="{{ route('perfil', ['id' => Auth::user()->usuario_id]) }}" >Mi Perfil
                            </a>
                        </li>
                        @if(Auth::user()->email === "admin@admin.com.ar")
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.tienda') }}">Admin</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <form action="{{route('auth.logout')}}" method="post">
                                @csrf
                                <button type="submit" class="btn nav-link">Cerrar Sesion</button>
                            </form>
                        </li>

                    @elseguest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('auth.login') }}">Iniciar Sesion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('auth.registrarse') }}">Registrarse</a>
                        </li>

                    @endauth
                </ul>--}}
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="{{ route('consultas') }}">Consultas</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <main>
        @if(Session::has('status.message'))
            <div class="msgAlert bg-warning text-bold text-center p-1">{!!  Session::get('status.message') !!} </div>
        @endif
        <section class="container min-vh-100">
            @yield('index')
        </section>
    </main>
    <footer class="bg-dark p-2 w-100 text-center">
        <p class="text-light m-0 py-2">© {{ now()->year }} Company, Inc</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
