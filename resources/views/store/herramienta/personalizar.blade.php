@extends('store/herramienta/layout')

@section('contenido')


    <div class="container" style="border: 1px solid black">
        <div class="row">
            <div class="col-lg-12">
                <a href="#" onclick="" class="btn btn-primary">Añadir Texto</a>
            </div>
        </div>



        {{$producto->id}}
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="border: 1px solid red">
                <canvas id="c" width="300" height="630">

<img id="my-image" src="../img/productos/bodas/1.jpg" alt="">

                </canvas>
            </div>

            {{$producto->portada}}
        </div>
    </div>




@stop
