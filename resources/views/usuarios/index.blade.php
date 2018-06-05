@extends('layouts/layout')

@section('contenido')

    <div class="container">
        <div class="row">
            @include('usuarios.menu-vertical')
            <div class="col-9" style="border: 1px solid grey">
                <h3>Resumen de Pedidos de {{Auth::user()->name}} </h3>

            </div>
        </div>
    </div>
@stop
