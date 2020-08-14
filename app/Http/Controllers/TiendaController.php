<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Checkout\Session;

class TiendaController extends Controller
{

    public function bodas(){
        $bodas = Producto::where('visible', 1)->where('tipo_producto' ,'bodas')
        ->orderBy('referencia', 'asc')->paginate(12);
        //dd($bodas);
        return view('store.bodas', compact('bodas'));
    }

    public function comuniones(){
        $comuniones = Producto::where('visible', 1)->where('tipo_producto' ,'comuniones')
        ->orderBy('referencia', 'asc')->paginate(12);
        //dd($producto);
        return view('store.comuniones', compact('comuniones'));
    }

    public function natalicios(){
        $natalicios = Producto::where('visible', 1)->where('tipo_producto' ,'natalicios')
        ->orderBy('referencia', 'asc')->paginate(12);
        //dd($producto);
        return view('store.natalicios', compact('natalicios'));
    }

    public function detalles(){
        $detalles = Producto::where('visible', 1)->where('tipo_producto' ,'detalles')
        ->orderBy('referencia', 'asc')->paginate(12);
        //dd($producto);
        return view('store.detalles', compact('detalles'));
    }

    //contactos
    public function contacto(){
        return view('store.contacto');
    }

    public function show($url){
        $producto = Producto::where('url', $url)->first();
        return view('store.detail', compact('producto'));
    }

    public function personalizar($id){
        $producto = Producto::findOrFail($id);

        return view('store.herramienta.personalizar2', compact('producto'));
    }

    public function pruebas(){
        Stripe::setApiKey('sk_test_WoU72Lb4i9MMkWWqANvMy1rc00fJym1egv');
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'mariposa',
                    ],
                    'unit_amount' => 2000,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => 'https://example.com/success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => 'https://example.com/cancel',
        ]);

        return view('store.pruebas', compact('session'));
    }
}
