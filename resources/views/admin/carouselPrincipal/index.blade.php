@extends('layouts/layout_admin')

@section('contenido')
  <div class="row">
    <div class="col-lg-12">
      <div class="card text-center">
        <div class="card-header">
          <h3>Carrusel Principal</h3>
        </div>
        <div class="card-body tabla">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Título</th>
                <th scope="col">Ruta</th>
                <th scope="col">Visible</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($carouselP as $carousel)
                {{$carousel->count()}}
                <tr>
                  <td class="text-center">{{$carousel->id}}</td>
                  <td class="text-center">{{$carousel->titulo}}</td>
                  <td class="text-center">{{$carousel->ruta}}</td>
                  <td class="text-center">
                    @if($carousel->visible)
                      <a href="{{ route('carousel-principal.hide', $carousel->id) }}">
                        <button class="btn btn-success btn-xs">
                          Activo
                        </button>
                      </a>
                    @else
                      <a href="{{ route('carousel-principal.activate', $carousel->id) }}">
                        <button class="btn btn-danger btn-xs">
                          Inactivo
                        </button>
                      </a>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer text-muted">
          <a href="{{ route('carousel-principal.create') }}" class="btn btn-primary">Añadir</a>
        </div>
      </div>
    </div>
  </div>
@stop
