@extends('layouts/layout')

@section('contenido')

  <?php
    $natalicios = App\Producto::all()->where('tipo_producto', 'natalicios');
  ?>

  <div class="container">
    <div class="row">
      <div class="col-md-3">

      </div>
      <div class="col-lg-9 ">
        @foreach ($natalicios as $natalicio)
          <div class="col-sm-4 col-xs-4 float-left">
            <img src="{{$natalicio->portada_principal}}" class="rounded float-left" alt="...">
            <div class="clearfix">

            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@stop
