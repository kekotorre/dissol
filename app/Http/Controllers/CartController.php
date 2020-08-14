<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Producto;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class CartController extends Controller
{
    //Constructor
    public function __construct(){
        if(!\Session::has('cart')) \Session::put('cart', array());
    }

    //Show
    public function show(){
        $cart = \Session::get('cart');
        //$cart = 1;
        $total = $this->total();
        return view('carrito.cart', compact('cart', 'total'));
    }

    //Resumen
    public function resumen(){
        $cart = \Session::get('cart');
        foreach($cart as $item){
            //dd($item);
            $nombreTarjeta = $item->nombre;
            $descripcionTarjeta = $item->descripcion;
            $portadaPrincipa = 'http://mundigraphic.es/' . $item->portada_principal;
            //dd(str_replace(' ', '%20', $portadaPrincipa));
        }
        //$cart = 1;
        $total = $this->total();
        $totalStripe = number_format( $total + 4.0, 2, ',', '.');
        $totalStripe = str_replace(',', '', $totalStripe);
        //dd($totalStripe);

        Stripe::setApiKey('sk_test_WoU72Lb4i9MMkWWqANvMy1rc00fJym1egv');
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $nombreTarjeta,
                        'description' => $descripcionTarjeta,
                        'images' => [str_replace(' ', '%20', $portadaPrincipa)]
                    ],
                    'unit_amount' => $totalStripe,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('resumen'),
        ]);

        return view('carrito.resumen', compact('cart', 'total', 'session'));
    }

    /**
     *
     */
    public function success(){
        dd(\Session::get('cart'));
        return \Redirect::route('index')
            ->with('compra', 'Compra realizada de forma correcta');
    }

    //Add item
    public function add(Producto $producto, Request $request){
        //dd($producto);

        $cart = \Session::get('cart');
        $producto->quantity = 10;
        $producto->composition = $request->input('compos');


        $cart[$producto->id] = $producto;
        //dd($cart);
        \Session::put('cart', $cart);
        //dd($cart = \Session::get('cart'));

        return redirect()->route('carrito');
    }

    //Delete item
    public function delete(Producto $producto){
        $cart = \Session::get('cart');
        unset($cart[$producto->id]);
    	\Session::put('cart', $cart);

    	return redirect()->route('carrito');

    }

    //Update price item
    public function update(Producto $producto, $quantity){
        $cart = \Session::get('cart');
        $cart[$producto->id]->quantity = $quantity;
    	\Session::put('cart', $cart);

    	return redirect()->route('carrito');
    }

    //Total a pagar
    private function total(){
        $cart = \Session::get('cart');
        $total = 0;
        foreach($cart as $item){
            $total += $item->precio * $item->quantity;
        }

        return $total;
    }

    //

}
