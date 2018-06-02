@extends('layouts/layout')
@inject('carouselS', 'App\CarouselSecundario')
@section('contenido')
        <div class="row slaider">
            <div class="col-12">
                <div class="carousel slide" id="carousel-principal" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <?php $i=0; ?>
                        @foreach ($carouselS->all() as $carousel)
                            @if($carousel->visible)
                                <li data-target="#carousel-principal" data-slide-to="{{$i}}" class=" @if($i === 0 ) active @endif "></li>
                                @endif
                                <?php $i++; ?>
                            @endforeach
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <?php $i=0; ?>
                            @foreach ($carouselS->all() as $carousel)
                                @if($carousel->visible)
                                    <div class="carousel-item @if($i === 0 ) active @endif ">

                                        <img src="{{$carousel->ruta}}" alt="{{$carousel->nombre}}" />
                                    </div>
                                @endif
                                <?php $i++; ?>
                            @endforeach
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
            <br /></br></br>
    <div class="container">
            <div class="row">
                @foreach ($boda as $tarjeta)
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

                        <a href="{{route('carrito-add', $tarjeta->id_producto)}}">añadir</a>
                    </div>
                @endforeach
            </div>
        </div>
    @stop
