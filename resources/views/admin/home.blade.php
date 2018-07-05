@extends('layouts/layout_admin')

@section('contenido')

    <div class="row">
        <div class="col-lg-5">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Pedidos</h3>
                </div>
                <div class="card-body tabla">
                    <table class="table table-sm" style="overflow: scroll;">
                        <thead class="table-active">
                            <tr>
                                <th scope="col">Número de pedido</th>
                                <th scope="col">Dirección de envio del pedido</th>
                                <th scope="col">Fecha del pedido</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pedidos as $pedido)
                                <tr>
                                    <td class="text-center">{{$pedido->numero_pedido}}</td>
                                    <td class="text-center">{{$pedido->direccion_envio}}</td>
                                    <td class="text-center">{{$pedido->created_at->format('d-m-Y H:i:s')}}</td>
                                    <td class="text-center"><a class="btn btn-primary" href="{{route('detalle-pedido', $pedido->numero_pedido)}}" >Ver</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-muted">
                    <br>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
        </div>
    </div>

    <?php

    $dataPoints = array(
    	array("y" => count($pedidos), "label" => "Junio" ),
    );

    ?>
    <script>

    window.onload = function() {

    var chart = new CanvasJS.Chart("chartContainer", {
    	animationEnabled: true,
    	theme: "light2",
    	title:{
    		text: "Pedidos"
    	},
    	axisY: {
    		title: "Número de Pedidos"
    	},
    	data: [{
    		type: "column",
    		yValueFormatString: "#,##0.## pedidos",
    		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    	}]
    });
    chart.render();

    }
    </script>


@stop
