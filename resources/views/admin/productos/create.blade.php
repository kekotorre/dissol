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
                            <div class="form-group col-lg-4">

                                <input type="text" class="form-control" name="referencia" value="{{old('referencia')}}" id="referencia" placeholder="Referencia del Producto">
                                {!! $errors->first('referencia', '<span class=text-danger>:message</span>') !!}
                            </div>
                            <div class="form-group col-lg-4">

                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}" placeholder="Nombre del Producto">
                                {!!$errors->first('nombre', '<span class=text-danger>:message</span>')!!}
                            </div>

                            <div class="form-group col-lg-4">

                                <select class="form-control form-control-md" name="tipo_producto" id="tipo_producto">
                                    <option value="">Escoger Tipo de Producto</option>
                                    <option value="bodas">Tarjeta de Boda</option>
                                    <option value="comuniones">Tarjeta de Comunión</option>
                                    <option value="natalicios">Natalicios</option>
                                    <option value="detalles">Detalles</option>
                                    <!--<option value="{{old('tipo_producto')}}">{{old('tipo_producto')}}</option>-->
                                </select>
                                {!!$errors->first('tipo_producto', '<span class=text-danger>:message</span>')!!}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <input type="text" class="form-control" name="precio" id="precio" value="{{old('precio')}}" placeholder="Precio del Producto">
                                {!!$errors->first('precio', '<span class=text-danger>:message</span>')!!}
                            </div>
                            <div class="col-lg-2">
                                <p>Descuento:
                                    <label class="" for="descuentoSi"> SI </label>
                                    <input class="" type="radio" name="descuento" id="descuentoSi" value="1">

                                    <label class="" for="descuentoNo"> No </label>
                                    <input class="" type="radio" name="descuento" id="descuentoNo" value="0" checked>
                                </p>
                            </div>

                            <div class="form-group col-lg-2">
                                <input type="text" class="form-control" name="porcentaje" id="porcentaje" value="{{old('porcentaje')}}" placeholder="Porcentaje de descuento">
                                {!!$errors->first('porcentaje', '<span class=text-danger>:message</span>')!!}
                            </div>

                            <div class="form-group col-lg-12">
                                <textarea class="form-control" name="descripcion"  value="{{old('descripcion')}}" id="descripcion" rows="2" placeholder="Descripción del Producto"></textarea>
                                {!!$errors->first('descripcion', '<span class=text-danger>:message</span>')!!}
                            </div>
                        </div>

                        <hr />
                        <!-- Formulario para subir las fotos del producto -->
                        <div class="form-row">
                            <div class="form-group col-lg-3">
                                <label for="portada_principal">Portada Principal</label>
                                <input type="file" class="form-control-file" name="portada_principal" id="portada_principal" value="{{old('portada_principal')}}" placeholder="">
                                {!!$errors->first('portada_principal', '<span class=text-danger>:message</span>')!!}
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="portada">Portada</label>
                                <input type="file" class="form-control-file" name="portada" id="portada" value="{{old('portada')}}" placeholder="">
                                {!!$errors->first('portada', '<span class=text-danger>:message</span>')!!}
                            </div>


                            <div class="form-group col-lg-3">
                                <label for="dorso">Dorso</label>
                                <input type="file" class="form-control-file" name="dorso" id="dorso" value="{{old('dorso')}}" placeholder="">
                                {!!$errors->first('dorso', '<span class=text-danger>:message</span>')!!}
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="interior">Interior</label>
                                <input type="file" class="form-control-file" name="interior" id="interior" value="{{old('interior')}}" placeholder="">
                                {!!$errors->first('interior', '<span class=text-danger>:message</span>')!!}
                            </div>
                        </div>
<hr />
                        <!-- Formulario para subir las fotos del producto que se pueden diseñar -->
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label for="portada_principal">Portada PNG</label>
                                <input type="file" class="form-control-file" name="portada_high" id="portada_high" value="{{old('portada_high')}}" placeholder="" disabled>
                                {!!$errors->first('portada_high', '<span class=text-danger>:message</span>')!!}
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="portada">Interior PNG</label>
                                <input type="file" class="form-control-file" name="interior_high" id="interior_high" value="{{old('interior_high')}}" placeholder="" disabled>
                                {!!$errors->first('interior_high', '<span class=text-danger>:message</span>')!!}
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="dorso">Dorso PNG</label>
                                <input type="file" class="form-control-file" name="dorso_high" id="dorso_high" value="{{old('dorso_high')}}" placeholder="" disabled>
                                {!!$errors->first('dorso_high', '<span class=text-danger>:message</span>')!!}
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
