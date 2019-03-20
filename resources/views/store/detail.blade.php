@extends('layouts/layout')

@section('contenido')
    <div class="container" id="">
        <div class="row">
            <!--Imagenes-->
            <div class="col-md-5 col-sm-12" id="">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="{{'../'.$producto->portada_principal}}" data-fancybox="images" data-caption="{{$producto->nombre}}" title="Imagen 1">
                            <img class="img-fluid" src="{{'../'.$producto->portada_principal}}" alt="First slide">
                        </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{'../'.$producto->portada}}" data-fancybox="images" data-caption="{{$producto->nombre}}" title="Imagen 2">
                            <img class="img-fluid" src="{{'../'.$producto->portada}}" alt="Second slide">
                        </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{'../'.$producto->dorso}}" data-fancybox="images" data-caption="{{$producto->nombre}}" title="Imagen 3">
                            <img class="img-fluid" src="{{'../'.$producto->dorso}}" alt="Third slide">
                        </a>
                        </div>
                        @if ($producto->interior === null)

                        @else
                            <div class="carousel-item">
                                <a href="{{'../'.$producto->interior}}" data-fancybox="images" data-caption="{{$producto->nombre}}" title="Imagen 4">
                                <img class="img-fluid" src="{{'../'.$producto->interior}}" alt="Third slide">
                            </a>
                            </div>
                        @endif
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
                            <a href="{{'../'.$producto->portada_principal}}" data-fancybox="gallery" data-caption="{{$producto->nombre}}" title="Imagen 1">
                            <img class="img-thumbnail" src="{{'../'.$producto->portada_principal}}" alt="">
                        </a>
                        </div>
                        <div class="col-md-4 col-sm-12" id="">
                            <a class="fancybox" href="{{'../'.$producto->portada}}" data-fancybox="gallery" data-caption="{{$producto->nombre}}" title="Imagen 2">
                            <img class="img-thumbnail" src="{{'../'.$producto->portada}}" alt="">
                        </a>
                        </div>
                        <div class="col-md-4 col-sm-12" id="">
                            <a href="{{'../'.$producto->dorso}}" data-fancybox="gallery" data-caption="{{$producto->nombre}}" title="Imagen 3">
                            <img class="img-thumbnail" src="{{'../'.$producto->dorso}}" alt="">
                        </a>
                        </div>
                        <div class="col-md-4 col-sm-12" id="">
                            @if ($producto->interior === null)

                            @else
                                <a class="fancybox" href="{{'../'.$producto->interior}}" data-fancybox="gallery" data-caption="{{$producto->nombre}}" title="Imagen 4">
                                <img class="img-thumbnail" src="{{'../'.$producto->interior}}" alt="">
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-7 col-sm-12" id="">
                <div class="row" id="">
                    <div class="col-12">
                        <p class="h1">{{$producto->nombre}} | {{$producto->referencia}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <p class="h1">{{number_format($producto->precio, 2, ',', '.')}}€</p>
                    </div>
                </div>
                <!--
                <div class="row">
                <div class="col-7">
                <p>
                <span><h5>Formato: {{$producto->formato}}</h5></span>
            </p>

            <p>
            <span>Medidas: {{$producto->medidas}}</span>
        </p>

        <p>
        <span>Tipo de Paple: {{$producto->tipo_papel}}</span>
    </p>
</div>
</div>
-->
<br />
<br />
<br />
<div class="row">
    <div class="col-9">
        <p class="">{{$producto->descripcion}}</p>
    </div>
</div>
<br /></br></br>
<div class="row">
    <div class="col-7">
        <!--<a href="{{route('carrito-add', $producto->id)}}" class="btn btn-success btn-lg">Comprar</a>-->
        <a href="{{route('personalizar', $producto->id)}}" class="btn btn-success btn-lg">Personalizar</a>
    </div>
</div>
</div>
</div>
</div>
@stop
