@extends('layouts/layout')
@inject('carouselS', 'App\CarouselSecundario')
@section('contenido')
    <div class="container">
        <div class="row">
            @foreach ($bodas as $tarjeta)
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <div class="card mb-5" style="">
                        <a href="{{route('detail-bodas', $tarjeta->url)}}">
                            <img class="card-img-top" src="{{$tarjeta->portada_principal}}" alt="">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{$tarjeta->nombre}} <small class="mp-1 mb-1">| {{$tarjeta->referencia}}</small></h5>
                            <h4 class="text-center">

                                @if ($tarjeta->descuento)
                                    <span class="card-text badge badge-light" style="text-decoration:line-through; color:black"> {{number_format($tarjeta->precio)}}€</span>
                                    -
                                    <span class="card-text badge badge-warning"> 0,38€</span>
                                @else
                                    <span class="card-text badge badge-light" style=" color:black"> {{number_format($tarjeta->precio, 2, ',', '.')}}€</span>
                                @endif
                            </h4>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="colo-lg-12">
            <div class="row justify-content-center align-items-center">{!! $bodas->links()!!}</div>
        </div>
    </div>
@stop
