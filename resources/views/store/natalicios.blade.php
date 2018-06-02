@extends('layouts/layout')

@section('contenido')
    <div class="container">
        <div class="row">
            @foreach ($natalicios as $tarjeta)
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <div class="card" style="">
                        <a href="{{route('detail-comuniones', $tarjeta->url)}}">
                            <img class="card-img-top" src="{{$tarjeta->portada_principal}}" alt="">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{$tarjeta->nombre}} <small class="mp-1 mb-1">| {{$tarjeta->referencia}}</small></h5>
                            <h4 class="text-center">

                                @if ($tarjeta->descuento === 1)
                                    <span class="card-text badge badge-light" style="text-decoration:line-through; color:black"> {{number_format($tarjeta->precio)}}€</span>
                                    -
                                    <span class="card-text badge badge-warning"> 0,38€</span>
                                @else
                                    <span class="card-text badge badge-light" style=" color:black"> {{number_format($tarjeta->precio)}}€</span>
                                @endif
                            </h4>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
