<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1-0, minimum-scale=1.0">
    <!-- css Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- css DISSOL -->
    <link href="{{ asset('css/dissol.css') }}" rel="stylesheet">
    <link href="{{ asset('css/googlefonts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/personalizar.css') }}" rel="stylesheet">
    <!-- font icons -->
    <!--<link rel="stylesheet" href="assets/css/font-awesome.min.css"  />-->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/2.3.1/fabric.js"></script>
    <script type="text/javascript" src="https://rawgit.com/bramstein/fontfaceobserver/master/fontfaceobserver.js"></script>

    <title>DISSOL</title>
</head>
<body>


    @yield('contenido')


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/font-awesome.js') }}"></script>
    <script src="{{ asset('js/cart.js') }}"></script>

</body>
</html>
