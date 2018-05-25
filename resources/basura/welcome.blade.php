<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1-0, minimum-scale=1.0">
  <!-- css Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- css DISSOL -->
  <link href="{{ asset('css/dissol.css') }}" rel="stylesheet">
  <!-- font icons -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css"  />

  <title>DISSOL</title>
</head>
<body>
  <!-- Cabecera con Menú -->
  <header>
    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-light " id="">
        <div class="container">
          <a style="color:black;" class="navbar-brand js-scroll-trigger" href="index.html">DISSOL<p>Invitaciones y Detalles</p></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a style="color:black;" class="nav-link js-scroll-trigger" href="bodas.html">Bodas</a>
              </li>
              <li class="nav-item">
                <a style="color:black;" class="nav-link js-scroll-trigger" href="comuniones.html">Comuniones</a>
              </li>
              <li class="nav-item">
                <a style="color:black;" class="nav-link js-scroll-trigger" href="natalicios.html">Natalicios</a>
              </li>
              <li class="nav-item">
                <a style="color:black;" class="nav-link js-scroll-trigger" href="detalles.html">Detalles</a>
              </li>
              <li class="nav-item">
                <a style="color:black;" class="nav-link js-scroll-trigger" href="contacto.html">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <hr>
    </div>
  </header>

  <div class="row slaider">
    <div class="col-12">
      <div class="carousel slide" id="carousel-principal" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-principal" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-principal" data-slide-to="1"></li>
          <li data-target="#carousel-principal" data-slide-to="2"></li>
          <li data-target="#carousel-principal" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active ">
            <img src="img/carousel/banerweb.jpg" alt="" />
          </div>
          <div class="carousel-item">
            <img src="img/carousel/banerweb2.jpg" alt="" />
          </div>
          <div class="carousel-item">
            <img src="img/carousel/banerweb3.jpg" alt="" />
          </div>
          <div class="carousel-item">
            <img src="img/carousel/banerweb4.jpg" alt="" />
          </div>
          <div class="carousel-item">
            <img src="img/carousel/baneredima.jpg" alt="" />
          </div>
        </div>
        <a href="#carousel-principal" class="carousel-control-prev" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>

        <a href="#carousel-principal" class="carousel-control-next" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
      </div>

    </div>
  </div>
  <br />
  <br />
  <br />

  <footer>
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
  </footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
