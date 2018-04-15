@extends('layouts/layout')

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xs-10">
        <div class="row text-center text-lg-left">
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-5">
            <div class="">
              <div id="ponerdescuento">
                <div id="descuento">10%</div>
              </div>
              <a class="d-block  h-100" href="{{route('vista')}}">
                <img id="img" src="img/productos/detalles/1.jpg" class="rounded" alt="...">
              </a>
              <div class="legende mb-3 text-center">
                <h3 style="display: inline;">Nombre </h3><small>| 13€</small>

              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-5">
            <a class="d-block mb-4 h-100" href="#">
              <img src="img/productos/detalles/1.jpg"  class="rounded " alt="...">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-5">
            <a class="md-block mb-4 h-100" href="#">
              <img src="img/productos/detalles/1.jpg"  class="rounded " alt="...">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-5">
            <a class="md-block mb-4 h-100" href="#">
              <img src="img/productos/detalles/1.jpg"  class="rounded " alt="...">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-5">
            <a class="md-block mb-4 h-100" href="#">
              <img src="img/productos/detalles/1.jpg" class="rounded " alt="...">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-5">
            <a class="md-block mb-4 h-100" href="#">
              <img src="img/productos/detalles/1.jpg" class="rounded " alt="...">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-5">
            <a class="md-block mb-4 h-100" href="#">
              <img src="img/productos/detalles/1.jpg" class="rounded " alt="...">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-5">
            <a class="md-block mb-4 h-100" href="#">
              <img src="img/productos/detalles/1.jpg" class="rounded " alt="...">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
