@extends('layouts/layout_admin')

@section('contenido')

  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead class="text-muted table-active">
          <tr>
            <th scope="col">Número de Pedido</th>
            <th scope="col">Dirección de Envío</th>
            <th scope="col">Dirección de Facturación</th>
            <th scope="col">Fecha de Pedido</th>
            <th scope="col">Telefono</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pedidos as $pedido)
            <tr>
                <th scope="row">{{$pedido->numero_pedido}}</th>
                <td>{{$pedido->direccion_envio}}</td>
                <td>{{$pedido->direccion_facturacion}}</td>
                <td>{{$pedido->created_at->format('d-m-Y H:i:s')}}</td>
                <td>{{$pedido->user->movil}}</td>
                <td><a class="btn btn-primary" href="{{route('detalle-pedido', $pedido->numero_pedido)}}" >Ver</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@stop
