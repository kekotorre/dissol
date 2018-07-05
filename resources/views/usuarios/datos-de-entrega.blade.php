@extends('layouts/layout')

@section('contenido')
    <div class="container">
        <div class="row">
            @include('usuarios.menu-vertical')
            <div class="col-9">
                <h3>Datos de Entrega </h3>
                <table class="table table-sm text-center">
                    <thead>
                        <tr>
                            <th>Dirección</th>
                            <th>País</th>
                            <th>Provincia</th>
                            <th>Población</th>
                            <th>Código Postal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(Auth::user()->address as $item)
                            <tr>
                                <td><p>{{$item->direccion}}</p></td>
                                <td><p>{{$item->pais}}</p></td>
                                <td><p>{{$item->provincia}}</p></td>
                                <td><p>{{$item->poblacion}}</p></td>
                                <td><p>{{$item->cod_postal}}</p></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop
