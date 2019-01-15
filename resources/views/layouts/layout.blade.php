{{--dd(auth()->user()->direcciones)--}}
<!DOCTYPE html>
<html lang="es-es">
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
    <link rel="shortcut icon" href="img/logomundigraphic.png" />
    <title>Mundigraphic</title>
</head>
<body>
    <!-- Cabecera con Menú -->
    <header>
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light " id="">
                <div class="container">
                    <a style="color:black;" class="navbar-brand js-scroll-trigger" href="{{ route('index')}}"><img height="80px" id="" src="img/logomundigraphic.png" alt="" title="Mundigraphic.es"/></a>
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
    <main role="main" class="container-fluid">
        @yield('contenido')
    </main>
    <footer>

        <div class="footer container-fluid">
            <hr>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="container text-center">
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </footer>

    <!--//BLOQUE COOKIES-->
    <div id="barraaceptacion" style="display: block;">
        <div class="inner">
            Solicitamos su permiso para obtener datos estadísticos de su navegación en esta web. Si continúa navegando consideramos que acepta el uso de cookies.
            <a href="javascript:void(0);" class="ok" onclick="PonerCookie();"><b>OK</b></a> |
            <a href="http://politicadecookies.com" target="_blank" class="info">Más información</a>
        </div>
    </div>

    <script>
    function getCookie(c_name){
        var c_value = document.cookie;
        var c_start = c_value.indexOf(" " + c_name + "=");
        if (c_start == -1){
            c_start = c_value.indexOf(c_name + "=");
        }
        if (c_start == -1){
            c_value = null;
        }else{
            c_start = c_value.indexOf("=", c_start) + 1;
            var c_end = c_value.indexOf(";", c_start);
            if (c_end == -1){
                c_end = c_value.length;
            }
            c_value = unescape(c_value.substring(c_start,c_end));
        }
        return c_value;
    }

    function setCookie(c_name,value,exdays){
        var exdate=new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
        document.cookie=c_name + "=" + c_value;
    }

    if(getCookie('tiendaaviso')!="1"){
        document.getElementById("barraaceptacion").style.display="block";
    }
    function PonerCookie(){
        setCookie('tiendaaviso','1',365);
        document.getElementById("barraaceptacion").style.display="none";
    }
</script>
<!--//FIN BLOQUE COOKIES-->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/font-awesome.js') }}"></script>
<script src="{{ asset('js/cart.js') }}"></script>
</body>
</html>
