@extends('layouts/layout_admin')

@section('contenido')
  <div class="row">
    <div class="col-lg-12">
      <div class="card ">
        <div class="card-header text-center">
          <h3>Añadir Nuevo Carrusel Secundario</h3>
        </div>
        <div class="card-body">
          @if(Session::has('notice'))
            <p> <strong> {{ Session::get('notice') }} </strong> </p>
          @endif
          <form method="post" action="{{route('carousel-secundario.store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            @include('admin.form.form_carousel')
          </form>
        </div>
      </div>
    </div>
  @stop
