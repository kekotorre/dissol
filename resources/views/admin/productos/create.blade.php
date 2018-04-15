@extends('layouts/layout_admin')

@section('contenido')
  <div class="row">
    <div class="col-lg-12">
      <div class="card ">
        <div class="card-header text-center">
          <h3>Añadir Nuevo Producto</h3>
        </div>
        <div class="card-body tabla">
          @if(session()->has('notice'))
            <div class="alert alert-success">{{ session('notice') }}</div>
          @endif
          <form method="POST" action="{{route('producto.store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-row">
              <div class="form-group col-lg-3">
                <label for="referencia">Referencia</label>
                <input type="text" class="form-control" name="referencia" value="{{old('referencia')}}" id="referencia" placeholder="Referencia del Producto">
                {!! $errors->first('referencia', '<span class=text-danger>:message</span>') !!}
              </div>
              <div class="form-group col-lg-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}" placeholder="Nombre del Producto">
                {!!$errors->first('nombre', '<span class=text-danger>:message</span>')!!}
              </div>

              <div class="form-group col-lg-3">
                <label for="tipo_producto">Tipo de Producto</label>
                <select class="form-control form-control-md" name="tipo_producto" id="tipo_producto">
                  <option value="">Escoger...</option>
                  <option value="bodas">Tarjeta de Boda</option>
                  <option value="comuniones">Tarjeta de Comunión</option>
                  <option value="natalicios">Natalicios</option>
                  <option value="detalles">Detalles</option>
                  <!--<option value="{{old('tipo_producto')}}">{{old('tipo_producto')}}</option>-->
                </select>
                {!!$errors->first('tipo_producto', '<span class=text-danger>:message</span>')!!}
              </div>
              <div class="form-group col-lg-3">
                <label for="precio">Precio del Producto</label>
                <input type="text" class="form-control" name="precio" id="precio" value="{{old('precio')}}" placeholder="Precio del Producto">
                {!!$errors->first('precio', '<span class=text-danger>:message</span>')!!}
              </div>
              <div class="form-group col-lg-1">
                <label for="descuento">Descuento</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="descuento" id="" value="1">
                  <label class="form-check-label" for="gridRadios1">
                    SI
                  </label>
                  <input class="form-check-input" type="radio" name="descuento" id="descuento" value="0" checked>
                  <label class="form-check-label" for="gridRadios1">
                     No
                  </label>
                </div>
              </div>
              <div class="form-group col-lg-3">
                <label for="porcentaje">Porcentaje</label>
                <input type="text" class="form-control" name="porcentaje" id="porcentaje" value="{{old('porcentaje')}}" placeholder="Porcentaje de descuento">
                {!!$errors->first('porcentaje', '<span class=text-danger>:message</span>')!!}
              </div>


              <div class="form-group col-lg-3">
                <label for="formato">Formato</label>
                <input type="text" class="form-control" name="formato" id="formato" value="{{old('formato')}}" placeholder="Formato del Producto">
                {!!$errors->first('formato', '<span class=text-danger>:message</span>')!!}
              </div>
              <div class="form-group col-lg-3">
                <label for="medidas">Medidas</label>
                <input type="text" class="form-control" name="medidas" id="medidas" value="{{old('medidas')}}" placeholder="Medidas del Producto">
                {!!$errors->first('medidas', '<span class=text-danger>:message</span>')!!}
              </div>
              <div class="form-group col-lg-3">
                <label for="tipo_paple">Tipo de Papel</label>
                <input type="text" class="form-control" name="tipo_papel" id="tipo_papel" value="{{old('tipo_papel')}}" placeholder="Tipo de Producto">
                {!!$errors->first('tipo_papel', '<span class=text-danger>:message</span>')!!}
              </div>
              <div class="form-group col-lg-9">
                <label for="descripcion">Descripción del Producto</label>
                <textarea class="form-control" name="descripcion" id="descripcion" value="{{old('descripcion')}}" rows="1"></textarea>
                {!!$errors->first('descripcion', '<span class=text-danger>:message</span>')!!}
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="portada_principal">Portada Principal</label>
                  <input type="file" class="form-control-file" name="portada_principal" id="portada_principal" value="{{old('portada_principal')}}" placeholder="">
                  {!!$errors->first('portada_principal', '<span class=text-danger>:message</span>')!!}
              </div>
              <div class="form-group col-lg-6">
                <label for="portada">Portada</label>
                  <input type="file" class="form-control-file" name="portada" id="portada" value="{{old('portada')}}" placeholder="">
                  {!!$errors->first('portada', '<span class=text-danger>:message</span>')!!}
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="dorso">Dorso</label>
                  <input type="file" class="form-control-file" name="dorso" id="dorso" value="{{old('dorso')}}" placeholder="">
                  {!!$errors->first('dorso', '<span class=text-danger>:message</span>')!!}
              </div>
              <div class="form-group col-lg-6">
                <label for="interior">Interior</label>
                  <input type="file" class="form-control-file" name="interior" id="interior" value="{{old('interior')}}" placeholder="">
                  {!!$errors->first('interior', '<span class=text-danger>:message</span>')!!}
              </div>
            </div>
          </div>
          <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary ">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@stop
