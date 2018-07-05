@extends('layouts/layout')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row text-center">
                    <div class="col-4">
                        <h5>Cesta</h5>
                    </div>
                    <div class="col-4">
                        <h5>Datos de Entrega</h5>
                    </div>
                    <div class="col-4">
                        <h5>Resumen</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="progress ">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="33.3" aria-valuemin="0" aria-valuemax="100" style="width: 33.3%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                @if (count($cart))

                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">€/U</th>
                                <th scope="col">Total</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $item)
                                <tr>
                                    <th><img style="width:50px;" src="{{ $item->portada_principal }}"></th>
                                    <td>{{$item->nombre}}
                                        <p><small>Ref: {{$item->referencia}}</small></p>
                                    </td>
                                    <td>
                                        <input
                                        type="number"
                                        min="10"
                                        max="999"
                                        value="{{ $item->quantity }}"
                                        id="product_{{ $item->id }}"
                                        >
                                        <a
                                        href=""
                                        class="btn-update-item"
                                        data-href="{{route('carrito-update', [$item->id, ''])}}"
                                        data-id = "{{ $item->id }}"
                                        >
                                        <i class="fas fa-sync" ></i>
                                    </a>
                                </td>
                                <td>{{$item->precio}}€</td>
                                <td>{{$item->precio * $item->quantity}}€</td>
                                <td><a href="{{route('carrito-delete', $item->id)}}" class=""><i class="fas fa-trash" style="color:red;"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <div class="row">
                    <div class="col-9"></div>
                    <div class="col-3">
                        <h5>Total: {{number_format($total)}}€</h5>
                        <p>(Impuestos Incluidos)</p>
                    </div>
                </div>

            @else
                <h3 class="text-center"><span class="">No hay productos en el carrito.</span></h3>
            @endif
            <div class="row">
                <div class="col-1"></div>
                <div class="col-2">
                    <a href="{{route('index')}}" class="btn btn-primary">Seguir Comprando</a>
                    <a href="{{route('payment')}}" class="btn btn-success">Pagar</a>
                </div>
                <div class="col-6"></div>
                <div class="col-3">
                    <a href="{{route('entrega')}}" class="btn btn-primary @if (count($cart)===0) disabled @endif ">Continuar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
