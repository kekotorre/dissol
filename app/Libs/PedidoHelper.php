<?php


namespace App\Libs;

use App\Pedido;


class PedidoHelper
{
    public static function guardarPedido($cart, $tipo_pago){

        $subtotal = 0;
        foreach($cart as $item1){
            //$subtotal += $item->precio * $item->quantity;
            $subtotal += $item1->precio * $item1->quantity;
        }

        $total = $subtotal + 4;
        //dd($total);
        //dd( \Auth::user()->id);

        $num_pedido = rand ( 100, 100000 );
        //dd($num_pedido);
        //dd($cart);

        $pedido = Pedido::create([
            'numero_pedido' => $num_pedido,
            'precio_total' => $total,
            'user_id' => \Auth::user()->id,
            'direccion_envio' => "Doctor Esquerdo Nº17 4ºA",
            'direccion_facturacion' => "Doctor Esquerdo Nº17 4ºA",
            'tipo_pago' => $tipo_pago,
            'pendiente' => 1,
        ]);

        /*foreach($cart as $item){
            self::gardarComposicion($item, $pedido->id);
        }*/

        return $pedido->numero_pedido;

    }


    public static function gardarComposicion() {

    }
}