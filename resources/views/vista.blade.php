@extends('layouts/layout')

@section('contenido')
  <div class="container" id="">
    <div class="row">
      <div class="col-md-5 col-sm-12" id="">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="img-fluid" src="img/productos/natalicios/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="img/productos/natalicios/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="img/productos/natalicios/3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <div class="row mb-3">

          </div>
          <div class="row" id="">
            <div class="col-md-4 col-sm-12" id="">
              <img class="img-thumbnail" src="img/productos/natalicios/3.jpg" alt="">
            </div>
            <div class="col-md-4 col-sm-12" id="">
              <img class="img-thumbnail" src="img/productos/natalicios/3.jpg" alt="">
            </div>
            <div class="col-md-4 col-sm-12" id="">
              <img class="img-thumbnail" src="img/productos/natalicios/3.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7 col-sm-12" id="">
        <div class="row" id="">
          <p class="h1">Titulo y ref</p>
        </div>
      </div>
    </div>
  </div>
@stop
