@extends('layouts/layout')

@section('contenido')
    <div class="container">
        <div class="row">
            @include('usuarios.menu-vertical')
            <div class="col-lg-9">
                <h3>Datos Personales </h3>
                <table class="table table-sm  ">
                    <tr><td>Nombre:</td><td>{{ Auth::user()->name }}</td></tr>
                    <tr><td>1º Apellido:</td><td>{{ Auth::user()->apellido_1 }}</td></tr>
                    <tr><td>2º Apellido:</td><td>{{ Auth::user()->apellido_2 }}</td></tr>
                    <tr><td>CIF:</td><td>{{ Auth::user()->dni }}</td></tr>
                    <tr><td>Teléfono movil:</td><td>{{ Auth::user()->movil }}</td></tr>
                </table>
                <div class="row float-right">
                    <div class="col-12">
                        <a href="{{route('user.edit')}}" class="btn btn-warning">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
