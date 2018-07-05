{{--dd(auth()->user()->direcciones)--}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1-0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- css Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- css DISSOL -->
    <link href="{{ asset('css/dissol.css') }}" rel="stylesheet">
    <!-- font icons -->
    <!--<link rel="stylesheet" href="assets/css/font-awesome.min.css"  />-->
    <title>DISSOL</title>
</head>
<body>
    <!-- Cabecera con Menú -->
    <header>
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light " id="">
                <div class="container">
                    <a style="color:black;" class="navbar-brand js-scroll-trigger" href="{{ route('index')}}">DISSOL<p>Invitaciones y Detalles</p></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a style="color:black;" class="nav-link js-scroll-trigger" href="{{ route('bodas')}}">Bodas</a>
                            </li>
                            <li class="nav-item">
                                <a style="color:black;" class="nav-link js-scroll-trigger" href="{{ route('comuniones')}}">Comuniones</a>
                            </li>
                            <li class="nav-item">
                                <a style="color:black;" class="nav-link js-scroll-trigger" href="{{ route('natalicios')}}">Natalicios</a>
                            </li>
                            <li class="nav-item">
                                <a style="color:black;" class="nav-link js-scroll-trigger" href="{{ route('detalles')}}">Detalles</a>
                            </li>
                            <li class="nav-item">
                                <a style="color:black;" class="nav-link js-scroll-trigger" href="{{ route('contacto')}}">Contacto</a>
                            </li>
                            @if (Auth::guest())
                                <li><a style="color:black;" class="nav-link js-scroll-trigger" href="{{ route('login') }}">Iniciar Sesión</a></li>
                            @else
                                <li>
                                    <a style="color:black;" class="nav-link js-scroll-trigger" href="{{ route('area-privada') }}">
                                        {{auth()->user()->name}}
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item" style="position: relative; left: 5px; top: 10px;">
                                <a href="{{route('carrito')}}">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <hr>
        </div>
    </header>
    @yield('contenido')
    <!--<footer>
    <center >
    <ul class="list-inline social-buttons">
    <li class="list-inline-item">
    <a href="#">
    <i class="fa fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a href="#">
<i class="fa fa-linkedin"></i>
</a>
</li>
</ul>
</center>
</footer>-->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/font-awesome.js') }}"></script>
<script src="{{ asset('js/cart.js') }}"></script>
</body>
</html>
