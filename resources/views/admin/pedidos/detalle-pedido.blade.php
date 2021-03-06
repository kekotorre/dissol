@extends('layouts/layout_admin')

@section('contenido')
    <h2 class="text-center">Detalles del Pedido</h2>
    <div class="row">
        <div class="col-lg-12">

            @foreach ($pedido as $item)
                <h3>Datos del Cliente</h3>
                <table class="table table-sm  ">
                    <tr><td>Cliente:</td><td>{{$item->user->name ." ". $item->user->apellido_1  ." ". $item->user->apellido_2}}</td></tr>
                    <tr><td>Telefono Móvil:</td><td>{{$item->user->movil}}</td></tr>
                    <tr><td>Telefono Fijo:</td><td>{{$item->user->fijo}}</td></tr>
                    <tr><td>Dirección de Envio</td><td>{{$item->direccion_envio}}</td></tr>
                    <tr><td></td><td></td></tr>
                </table>


            <h3>Datos del Pedido</h3>
            <table class="table table-sm" style="overflow: scroll;">
                <thead class="table-active">
                    <tr>
                        <th class="text-center" scope="col"></th>
                        <th class="text-center" scope="col">Referencia del Producto</th>
                        <th class="text-center" scope="col">Cantidad</th>
                        <th class="text-center" scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                        @foreach ($item->composicion as $item1)
                            <tr>
                                <td class="text-center"><img style="width:50px;" src="../{{$item1->producto->portada_principal}}"></td>
                                <td class="text-center">{{$item1->producto->referencia}}</td>
                                <td class="text-center">{{$item1->cantidad}}</td>
                                <td class="text-center"><a href="{{route('composicionPdf', $item1->id)}}"> Descargar</a></td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{route('detallePdf', $item->numero_pedido)}}"> Descargar</a>
    </div>
@stop
