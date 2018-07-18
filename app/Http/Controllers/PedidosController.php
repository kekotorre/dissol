<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

//use Barryvdh\DomPDF\Facade;

use Illuminate\Http\Request;
use App\Pedido;
use App\Composicion;

class PedidosController extends Controller
{
    public function index()
    {
        $pedidos =  Pedido::all();

        return view('admin.pedidos.index', compact('pedidos'));
    }

    public function detallePedido($numero_pedido){
        $pedido = Pedido::where('numero_pedido', $numero_pedido)->get();

        foreach($pedido as $item){
            $pedido1 = Pedido::find($item->id);
            $pedido1->pendiente = '0';
            $pedido1->save();
        }

        return view('admin.pedidos.detalle-pedido', compact('pedido'));
    }

    public function detallePdf($numero_pedido){
        $pedido = Pedido::where('numero_pedido', $numero_pedido)->get();
        //dd($pedido);
        $pdf = \PDF::loadView('admin.pedidos.detalle_pdf', compact('pedido'));
        return $pdf->download($numero_pedido . '.pdf');
        //return view('admin.pedidos.detalle-pedido', compact('pedido'));
        //$pdf = App::make('dompdf.wrapper');
        //$pdf->loadHTML('<h1>Test</h1>');
        //return $pdf->stream();
    }

    public function composicionPdf($id_composicion){
        //dd($id_composicion);
        $composicion = Composicion::where('id', $id_composicion)->get();
        //dd($composicion);
        $pdf1 = \PDF::loadView('admin.pedidos.composicion.composicion_pdf', compact('composicion'));
        return $pdf1->download('composicion' . $id_composicion. '.pdf');
        //return view('admin.pedidos.composicion.composicion_pdf', compact('composicion'));
        //return view('admin.pedidos.detalle-pedido', compact('pedido'));
        //$pdf = App::make('dompdf.wrapper');
        //$pdf->loadHTML('<h1>Test</h1>');
        //return $pdf->stream();
    }

}
