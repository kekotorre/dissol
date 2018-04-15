@extends('layouts/layout_admin')

@section('contenido')

  <div class="row">
    <div class="col-md-12">
      <table class="table ">
        <thead class="text-muted">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Asunto</th>
            <th scope="col">Creado</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($mensajes as $mensaje)
            <tr id="mensaje" onclick="location='{{route('mensaje.show', $mensaje->id)}}'">
                <th scope="row">{{$mensaje->nombre}}</th>
                <td>{{$mensaje->asunto}}</td>
                <td>{{$mensaje->created_at}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@stop
