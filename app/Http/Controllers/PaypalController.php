<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Libs\PedidoHelper;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Foundation\Bus\DispatchesCommands;

use Illuminate\Support\Facades\Input;


use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;


use App\Pedido;
use App\Composicion;


class PaypalController extends Controller
{
    private $_api_context;

    public function __construct()
    {
        // setup PayPal api context
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function postPayment()
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $items = array();
        $subtotal = 0;
        $cart = \Session::get('cart');
        $currency = 'EUR';

        foreach($cart as $producto){
            $item = new Item();
            $item->setName($producto->nombre)
            ->setCurrency($currency)
            ->setDescription($producto->descripcion)
            ->setQuantity($producto->quantity)
            ->setPrice($producto->precio);

            $items[] = $item;
            $subtotal += $producto->quantity * $producto->precio;
        }
        $item_list = new ItemList();
        $item_list->setItems($items);

        $details = new Details();
        //costo por envio
        $details->setSubtotal($subtotal)
        ->setShipping(4);

        $total = $subtotal + 4;

        $amount = new Amount();
        $amount->setCurrency($currency)
        ->setTotal($total)
        ->setDetails($details);

        //transaccion
        $transaction = new Transaction();
        $transaction->setAmount($amount)
        ->setItemList($item_list)
        ->setDescription('Pedido de prueba en mi Laravel App Store');

        //si se hace el pago o se cancela
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payment.status'))
        ->setCancelUrl(\URL::route('payment.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
        ->setPayer($payer)
        ->setRedirectUrls($redirect_urls)
        ->setTransactions(array($transaction));

        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Ups! Algo salió mal');
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        // add payment ID to session
        \Session::put('paypal_payment_id', $payment->getId());
        //dd($payment->getId());
        if(isset($redirect_url)) {
            // redirect to paypal
            return \Redirect::away($redirect_url);
        }

        return \Redirect::route('cart-show')
        ->with('error', 'Ups! Error desconocido.');

    }

    public function getPaymentStatus()
    {
        // Get the payment ID before session clear
        $payment_id = \Session::get('paypal_payment_id');

        // clear the session payment ID
        \Session::forget('paypal_payment_id');

        $payerId = Input::get('PayerID');
        $token = Input::get('token');


        //if (empty(\Input::get('PayerID')) || empty(\Input::get('token'))) {
        if (empty($payerId) || empty($token)) {
            return \Redirect::route('index')
            ->with('message', 'Hubo un problema al intentar pagar con Paypal');
        }

        $payment = Payment::get($payment_id, $this->_api_context);
        //dd($payment_id);
        // PaymentExecution object includes information necessary
        // to execute a PayPal account payment.
        // The payer_id is added to the request query parameters
        // when the user is redirected from paypal back to your site
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        //Execute the payment
        $result = $payment->execute($execution, $this->_api_context);

        //echo '<pre>';print_r($result);echo '</pre>';exit; // DEBUG RESULT, remove it later

        if ($result->getState() == 'approved') { // payment made
            // Registrar el pedido --- ok
            // Registrar el Detalle del pedido  --- ok
            // Eliminar carrito
            // Enviar correo a user
            // Enviar correo a admin
            // Redireccionar

            //$this->savePedido(\Session::get('cart'));
            $cart = \Session::get('cart');
           $numero_pedido = PedidoHelper::guardarPedido($cart, 'Paypal');
            MensajesController::emailPedidoRealizado($numero_pedido);
            \Session::forget('cart');


            return \Redirect::route('index')
            ->with('compra', 'Compra realizada de forma correcta');
        }
        return \Redirect::route('index')
        ->with('compra', 'La compra fue cancelada');
    }


    private function savePedido($cart)
    {
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
            'pendiente' => 1,
        ]);

        foreach($cart as $item){
            $this->saveComposicion($item, $pedido->id);
        }
    }

    private function saveComposicion($item, $pedido_id)
    {
        //dd($factura_id);
        $jSon = '{
            "glossary": {
                "title": "example glossary",
                "GlossSee": "markup"
            }
        }';
        Composicion::create([
            'cantidad' => $item->quantity,
            'precio_unidad' => $item->precio,
            'precio_total' => $item->precio * $item->quantity,
            'composicion' => $item->composition,
            'pedido_id' => $pedido_id,
            'producto_id' => $item->id

            //json(composicion)

        ]);
    }
}
