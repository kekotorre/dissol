@extends('layouts/layout')

@section('contenido')
    <div class="container">
        <div class="row">
            @include('usuarios.menu-vertical')
            <div class="col-lg-9">
                <h3>Datos Personales </h3>
                <form method="POST" action="{{route('user.update', Auth::user()->id)}}" id="actualizar">
                    {!!method_field('PUT')!!}
                    {{csrf_field()}}
                    <table class="table table-sm ">
                        <tr><td>Nombre:</td><td><input type="text" name="name" value="{{ Auth::user()->name }}"></td></tr>
                        <tr><td>1º Apellido:</td><td><input type="text" name="apellido_1" value="{{ Auth::user()->apellido_1 }}"></td></tr>
                        <tr><td>2º Apellido:</td><td><input type="text" name="apellido_2" value="{{ Auth::user()->apellido_2 }}"></td></tr>
                        <tr><td>CIF:</td><td><input type="text" name="dni" value="{{ Auth::user()->dni }}"></td></tr>
                        <tr><td>Teléfono movil:</td><td><input type="text" name="movil" value=" {{Auth::user()->movil }}"></td></tr>
                    </table>
                    <div class="row float-right">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success" name="button">Guardar</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>

    @stop
