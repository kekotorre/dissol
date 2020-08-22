@extends('layouts/layout')

@section('contenido')
    <div class="container">
        <div class="row">
            @include('usuarios.menu-vertical')
            <div class="col-lg-9">
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
                <div class="row">
                    <div class="col-lg-12">
                        <form method="POST" action="{{route('direccion.add')}}" id="actualizar">
                            {{csrf_field()}}

                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="direccion" placeholder="Direccion">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="pais" placeholder="País">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="provincia" placeholder="Provincia">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="poblacion" placeholder="Población">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="codigo_postal" placeholder="Código Postal">
                                    </div>
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                </div>
                                <br>
                            <div class="row float-right">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success" name="button">Añadir</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
