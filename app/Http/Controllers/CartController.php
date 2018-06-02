<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Producto;

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

    //Add item
    public function add(Producto $producto){
        //dd($producto);

        $cart = \Session::get('cart');
        $producto->quantity = 10;

        $cart[$producto->id_producto] = $producto;
        \Session::put('cart', $cart);
        //dd($cart = \Session::get('cart'));

        return redirect()->route('carrito');
    }

    //Delete item
    public function delete(Producto $producto){
        $cart = \Session::get('cart');
        unset($cart[$producto->id_producto]);
    	\Session::put('cart', $cart);

    	return redirect()->route('carrito');

    }

    //Update price item
    public function update(Producto $producto, $quantity){
        $cart = \Session::get('cart');
        $cart[$producto->id_producto]->quantity = $quantity;
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
