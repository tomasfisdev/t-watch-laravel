<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="{{ url('css/estilos.css') }}">
    <link rel="shortcut icon" href="{{ url('imgs/iconos/favicon.ico') }}" type="image/x-icon">
    <!-- Font Manrope -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Librerías de iconos (bootstrap y boxicons) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>T-Watch | @yield('title')</title>
</head>
<body>
    <header>
        <h1 id="logo">T-Watch</h1>
        <nav class="cerrado">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('productos.index')}}">Productos</a></li>
                <li><a href="{{ route('articulos.index')}}">Artículos</a></li>
                @auth
                <li>
                    <form action="{{route('auth.logout')}}" method="post">
                        @csrf
                        <button type="submit">Cerrar Sesión ({{auth()->user()->name}})</button>
                    </form>
                </li>
                @elseguest
                <li><a href="{{route('auth.loginForm')}}">Iniciar Sesión</a></li>
                <li><a href="{{route('auth.registerForm')}}">Registrarse</a></li>
                @endauth
            </ul>
        </nav>
        <i id="icono-hamburguesa" class='bx bx-menu-alt-right'></i>
    </header>
    <div>
        @if(Session::has('successMessage'))
        <div class="success-message">{{Session::get('successMessage')}}</div>
        @endif
        @yield('content')
    </div>
    <footer>
        <ul class="container">
            <li>
                <h3>Sobre Nosotros</h3>
                <p>T-Watch es una empresa con más de 20 años de experiencia y trayectoria, destacada por siempre
                    acompañar al cliente desde el primer momento, asesorando y brindando la alternativa indicada para
                    cada tipo de necesidad.</p>
            </li>
            <li>
                <h3>Contacto</h3>
                <div class="flex">
                    <i class="bi bi-geo-alt"></i>
                    <a href="https://www.google.com/maps/search/calle+falsa+123/@-34.614426,-58.432188,13z/data=!3m1!4b1"
                        target="_blank">Calle
                        Falsa 123</a>
                </div>
                <div class="flex">
                    <i class="bi bi-telephone"></i><a href="tel:49565874">4956-5874</a>
                </div>
                <div class="flex">
                    <a href="https://www.instagram.com/" target="_blank">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/" target="_blank">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://twitter.com/?lang=es" target="_blank">
                        <i class="bi bi-twitter"></i>
                    </a>
                </div>
            </li>
            <li>
                <h3>Newsletter</h3>
                <p>Enterate de nuestras noticias suscribiéndote a nuestro Newsletter.</p>
                <form action="#">
                    <label class="label-oculto" for="email-newsletter">Email</label>
                    <input type="email" name="email-newsletter" id="email-newsletter" placeholder="Tu email...">
                    <button type="submit">
                        <i class="bi bi-arrow-right-circle"></i>
                    </button>
                </form>
            </li>
        </ul>
        <p class="footer-bottom">
            Copyright © 2021, todos los derechos reservados | T-Watch.
        </p>
    </footer>
    <script src="{{ url('js/script.js') }}"></script>
</body>
</html>
