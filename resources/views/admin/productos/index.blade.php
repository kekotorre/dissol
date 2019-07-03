@extends('layouts/layout_admin')
@section('contenido')
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-12 col-xs-12">
              <h3 class="col-8 float-left">Listado de productos</h3>
              <form  method="post" class="form-inline col-4 float-rigth" action="{{route('producto.busqueda')}}">
                {{csrf_field()}}
                <input class="form-control mr-sm-2 float-rigth" type="search" name="id_producto" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-primary float-rigth" type="submit">Buscar</button>
              </form>
            </div>
          </div>
        </div>
        <div class="card-body text-center tabla">
          <table class="table">
            <thead>
            <tr>
              <th scope="col">Referencia</th>
              <th scope="col">Nombre</th>
              <th scope="col">Precio</th>
              <th scope="col">Visible</th>
              <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($productos as $producto)
              <tr>
                <td class="text-center">{{$producto->referencia}}</td>
                <td class="text-center">{{$producto->nombre}}</td>
                <td class="text-center">{{$producto->precio}} €</td>
                <td class="text-center">
                  @if($producto->visible)
                    <a href="{{ route('producto.hide', $producto->id) }}">
                      <button class="btn btn-success btn-xs">
                        Activo
                      </button>
                    </a>
                  @else
                    <a href="{{ route('producto.activate', $producto->id) }}">
                      <button class="btn btn-danger btn-xs">
                        Inactivo
                      </button>
                    </a>
                  @endif
                </td>
                <td class="text-center">
                  <a href="{{route('producto.edit', $producto->id)}}"><i class="fas fa-lg fa-edit"></i></a>
                  <a id="prueba"  href="{{route('producto.destroy', $producto->id)}}"><i class="far fa-lg fa-trash-alt"></i></a>
                  <form method="post" action="{{route('producto.destroy', $producto->id)}}">
                    {!! method_field('DELETE') !!}
                    {!! csrf_field() !!}

                    <button class="" type="submit"><i class="far fa-lg fa-trash-alt"></i></button>
                  </form>
                </td>
              </tr>
            @endforeach

            </tbody>
          </table>
        </div>
        <div class="card-footer text-center">
          <a href="{{ route('producto.create') }}" class="btn btn-primary">Añadir</a>
        </div>
      </div>
    </div>
  </div>
@stop
