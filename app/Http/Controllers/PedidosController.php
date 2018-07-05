<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;

class PedidosController extends Controller
{
    public function index()
    {
        $pedidos =  Pedido::all();

        return view('admin.pedidos.index', compact('pedidos'));
    }

    public function detallePedido($numero_pedido){
        $pedido = Pedido::where('numero_pedido', $numero_pedido)->get();
        return view('admin.pedidos.detalle-pedido', compact('pedido'));
    }

}
