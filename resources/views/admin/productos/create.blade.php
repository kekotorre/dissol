@extends('layouts/layout_admin')

@section('contenido')
  <div class="row">
    <div class="col-lg-12">
      <div class="card ">
        <div class="card-header text-center">
          <h3>Añadir Nuevo Producto</h3>
        </div>
        <div class="card-body tabla">
          @if(Session::has('notice'))
            <p> <strong> {{ Session::get('notice') }} </strong> </p>
          @endif
          <form method="post" action="{{route('producto.store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-row">
              <div class="form-group col-lg-3">
                <label for="referencia">Referencia</label>
                <input type="text" class="form-control" name="referencia" id="referencia" aria-describedby="" placeholder="Referencia del Producto">
                {!!$errors->first('referencia', '<span class=error>:message</span>')!!}
              </div>
              <div class="form-group col-lg-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="" placeholder="Nombre del Producto">
                {!!$errors->first('nombre', '<span class=error>:message</span>')!!}
              </div>

              <div class="form-group col-lg-3">
                <label for="tipo_producto">Tipo de Producto</label>
                <select class="form-control form-control-md" name="tipo_producto" id="tipo_producto">
                  <option value="">Escoger...</option>
                  <option value="bodas">Tarjeta de Boda</option>
                  <option value="comuniones">Tarjeta de Comunión</option>
                  <option value="natalicios">Natalicios</option>
                  <option value="detalles">Detalles</option>
                </select>
                {!!$errors->first('tipo_producto', '<span class=error>:message</span>')!!}
              </div>
              <div class="form-group col-lg-3">
                <label for="precio">Precio del Producto</label>
                <input type="text" class="form-control" name="precio" id="precio" aria-describedby="" placeholder="Precio del Producto">
                {!!$errors->first('precio', '<span class=error>:message</span>')!!}
              </div>
              <div class="form-group col-lg-1">
                <label for="descuento">Descuento</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="descuento" id="" value="1">
                  <label class="form-check-label" for="gridRadios1">
                    SI
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="descuento" id="descuento" value="0" checked>
                  <label class="form-check-label" for="gridRadios1">
                    No
                  </label>
                </div>
              </div>
              <div class="form-group col-lg-3">
                <label for="porcentaje">Porcentaje</label>
                <input type="text" class="form-control" name="cantidad_descuento" id="porcentaje" aria-describedby="" placeholder="Porcentaje de descuento">
                {!!$errors->first('porcentaje', '<span class=error>:message</span>')!!}
              </div>


              <div class="form-group col-lg-3">
                <label for="formato">Formato</label>
                <input type="text" class="form-control" name="formato" id="formato" aria-describedby="" placeholder="Formato del Producto">
                {!!$errors->first('formato', '<span class=error>:message</span>')!!}
              </div>
              <div class="form-group col-lg-3">
                <label for="medidas">Medidas</label>
                <input type="text" class="form-control" name="medidas" id="medidas" aria-describedby="" placeholder="Medidas del Producto">
                {!!$errors->first('medidas', '<span class=error>:message</span>')!!}
              </div>
              <div class="form-group col-lg-3">
                <label for="tipo_paple">Tipo de Papel</label>
                <input type="text" class="form-control" name="tipo_papel" id="tipo_papel" aria-describedby="" placeholder="Tipo de Producto">
                {!!$errors->first('tipo_papel', '<span class=error>:message</span>')!!}
              </div>
              <div class="form-group col-lg-9">
                <label for="descripcion">Descripción del Producto</label>
                <textarea class="form-control" name="descripcion" id="descripcion" rows="1"></textarea>
                {!!$errors->first('descripcion', '<span class=error>:message</span>')!!}
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="portada_principal">Portada Principal</label>
                  <input type="file" class="form-control-file" name="portada_principal" id="portada_principal" placeholder="">
                  {!!$errors->first('portada_principal', '<span class=error>:message</span>')!!}
              </div>
              <div class="form-group col-lg-6">
                <label for="portada">Portada</label>
                  <input type="file" class="form-control-file" name="portada" id="portada" placeholder="">
                  {!!$errors->first('portada', '<span class=error>:message</span>')!!}
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="dorso">Dorso</label>
                  <input type="file" class="form-control-file" name="dorso" id="dorso" placeholder="">
                  {!!$errors->first('dorso', '<span class=error>:message</span>')!!}
              </div>
              <div class="form-group col-lg-6">
                <label for="interior">Interior</label>
                  <input type="file" class="form-control-file" name="interior" id="interior" placeholder="">
                  {!!$errors->first('interior', '<span class=error>:message</span>')!!}
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
