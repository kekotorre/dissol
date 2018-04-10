@extends('layouts/layout_admin')

@section('contenido')
  <div class="row">
    <div class="col-lg-12">
      <div class="card ">
        <div class="card-header text-center">
          <h3>Añadir Nuevo Carrusel Principal</h3>
        </div>
        <div class="card-body">
          @if(Session::has('notice'))
            <p> <strong> {{ Session::get('notice') }} </strong> </p>
          @endif
          <form method="post" action="{{route('carousel-principal.store')}}" enctype="multipart/form-data">
            @include('admin.form.form_carousel')
          </form>
        </div>
      </div>
    </div>
  @stop
