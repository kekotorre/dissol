@extends('layouts/layout')

@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <h2>Seleccionar dirección de Envio</h2>
                    <select class="form-control" id="" >
                        <option></option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="row">
                    <h2>Seleccionar dirección de Facturación</h2>
                </div>
            </div>
            <div class="col-lg-6">

            </div>
        </div>

    </div>
    @foreach(Auth::user()->address as $item)
        {{$item->direccion}}
    @endforeach

@stop
