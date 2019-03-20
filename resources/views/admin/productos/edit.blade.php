@extends('layouts/layout')

@section('contenido')
    <div class="container" id="">
        <div class="row">
            <!--Imagenes-->
            <div class="col-md-5 col-sm-12" id="">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="{{'../../'.$producto->portada_principal}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="{{'../../'.$producto->portada}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="{{'../../'.$producto->dorso}}" alt="Third slide">
                        </div>
                        @if ($producto->interior === null)

                        @else
                            <div class="carousel-item">
                                <img class="img-fluid" src="{{'../../>'.$producto->interior}}" alt="Third slide">
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
                            <img class="img-thumbnail" src="{{'../../'.$producto->portada}}" alt="">
                        </div>
                        <div class="col-md-4 col-sm-12" id="">
                            <img class="img-thumbnail" src="{{'../../'.$producto->dorso}}" alt="">
                        </div>
                        <div class="col-md-4 col-sm-12" id="">
                            @if ($producto->interior === null)

                            @else
                                <img class="img-thumbnail" src="{{'../../'.$producto->interior}}" alt="">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{route('producto.update', $producto->id)}}" id="actualizar">
                {!!method_field('PUT')!!}
                {!! csrf_field() !!}
                <div class="col-lg-12 col-sm-12" id="" >
                    <div class="row" id="">
                        <div class="col-lg-12" >
                            <p class="h1">{{$producto->nombre}} | {{$producto->referencia}}</p>
                            <div class="form-inline">
                                <input class="form-control" type="text" name="nombre" value="{{$producto->nombre}}"> |
                                <input class="form-control" type="text" name="referencia" value="{{$producto->referencia}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7 form-inline">
                            <p class="h1">{{$producto->precio}}€</p> <input class="form-control col-3" type="text" name="precio" value="{{$producto->precio}}">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-7">
                            <p class="h1">{{$producto->descripcion}}</p>
                            <textarea name="descripcion" form ="actualizar" rows="2" cols="30">{{$producto->descripcion}}</textarea>

                            <button class="btn btn-success btn-lg" type="submit" name="Guardar">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
