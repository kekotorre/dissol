@extends('layouts/layout')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row text-center">
                    <div class="col-lg-6">
                        <h5>Cesta</h5>
                    </div>
                    <div class="col-lg-6">
                        <h5>Resumen</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="progress ">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6">
                @if(Auth::user()->address = null)
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Seleccionar dirección de Envio</h3>
                        <select class="form-control" id="" >
                            <option></option>
                            @foreach (Auth::user()->address as $item)
                                <option>{{$item->direccion}} - {{$item->provincia}} - {{$item->poblacion}} - {{$item->cod_postal}} - {{$item->pais}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Seleccionar dirección de Facturación</h3>
                        <select class="form-control" id="" >
                            <option></option>
                            @foreach (Auth::user()->address as $item)
                                <option>{{$item->direccion}} - {{$item->provincia}} - {{$item->poblacion}} - {{$item->cod_postal}} - {{$item->pais}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                    @else
                <h1>Aqui va un form para añadir dirección si no se ha guardado</h1>
                @endif
            </div>
            <div class="col-lg-6">
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
                                <td>{{ $item->quantity }}</td>
                                <td>{{number_format($item->precio, 2, ',', '.')}}€</td>
                                <td>{{number_format($item->precio * $item->quantity, 2, ',', '.')}}€</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-6">
                        <h5 class="text-right">Total:</h5>
                        <h5 class="text-right">Portes(ESPAÑA - MRW):</h5>
                        <h5 class="text-right">Total a pagar:</h5>
                    </div>
                    <div class="col-1">
                        <h5>{{number_format($total, 2, ',', '.')}}€</h5>
                        <h5>+4,00€</h5>
                        <h5>{{number_format($total + 4, 2, ',', '.')}}€</h5>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-2">
                <a href="{{route('carrito')}}" class="btn btn-primary">Atras</a>
            </div>
            <div class="col-5"></div>
            <div class="col-2">
                <a href="{{route('payment')}}" class="btn  float-right" style="background-color: #3b7bbf; color: white;">Paypal <i class="fab fa-paypal"></i></a>
            </div>
            <div class="col-2">
                <a href="" id="checkout-stripe-button" class="btn float-auto" style="background-color: rgb(36,168,106); color: white;">TPV <i class="far fa-credit-card"></i></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-8"></div>
            <div class="col-3" style="margin-left: 15px;">
                <a href="" id="" class="btn float-right" style="background-color: rgb(36,168,106); color: white; width: 203px">Transferencia Bancaria</a>
            </div>
        </div>
    </div>
    <script>
        var stripe = Stripe('{{config('services.stripe.key')}}');

        var checkoutButton = document.getElementById('checkout-stripe-button');

        checkoutButton.addEventListener('click', function() {
            stripe.redirectToCheckout({
                // Make the id field from the Checkout Session creation API response
                // available to this file, so you can provide it as argument here
                // instead of the  placeholder.
                sessionId: '{{ $session->id}}'
            }).then(function (result) {
                // If `redirectToCheckout` fails due to a browser or network
                // error, display the localized error message to your customer
                // using `result.error.message`.
            });
        });
    </script>
@stop
