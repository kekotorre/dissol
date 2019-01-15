@extends('layouts/layout')

@section('contenido')
    @if(session()->has('compra'))
        <div class="alert alert-success">{{ session('compra') }}</div>
    @endif
    <div class="carrusel">
        <div class="row slaider">
            <div class="col-12">
                <div class="carousel slide" id="carousel-principal" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php $i=0; ?>
                        @foreach ($carouselP->all() as $carousel)
                            @if($carousel->visible)
                                <li data-target="#carousel-principal" data-slide-to="{{$i}}" class=" @if($i === 0 ) active @endif "></li>
                                @endif
                                <?php $i++; ?>
                            @endforeach
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <?php $i=0; ?>
                            @foreach ($carouselP->all() as $carousel)
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
        </div>
    @stop
