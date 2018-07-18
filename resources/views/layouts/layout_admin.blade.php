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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.js"></script>
    <!-- font icons -->
    <!--<link rel="stylesheet" href="assets/css/font-awesome.min.css"  />-->
    <title>DISSOL</title>
</head>
<body>

    <?php
        $mensaje = App\Mensaje::all();
        $pedidos =  App\Pedido::all();
    ?>

    <!-- Cabecera con Menú -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <a class="navbar-brand" style="color:black;" class="navbar-brand js-scroll-trigger" href="{{route('home')}}">Dashboard</a>
        <ul class="nav navbar nav-top-links ml-auto ">
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{route('mensajes.index')}}"><em class="fas fa-envelope"></em>
                    @if($mensaje === 0)
                    @else
                        <span class="label label-danger">{{count($mensaje)}}</span>
                    @endif
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('pedidos.index')}}"><i class="fas fa-inbox"></i>
                    @if($pedidos === 0)
                    @else
                        <span class="label1 label-danger">{{count($pedidos)}}</span>
                    @endif
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('carousel-principal.index')}}">
                            Carrusel Principal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('carousel-secundario.index')}}">
                            Carrusel Secundario

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('producto.index')}}">
                            <span data-feather="shopping-cart"></span>
                            Productos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pedidos.index')}}">
                            <span data-feather="shopping-cart"></span>
                            Pedidos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <span data-feather="shopping-cart"></span>
                            Descuentos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('mensajes.index')}}">
                            <span data-feather="shopping-cart"></span>
                            Mensajes
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-10 ml-sm-auto col-lg-10 pt-3 px-4" >
            @yield('contenido')
        </main>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/font-awesome.js') }}"></script>
</body>
</html>
