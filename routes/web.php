<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
return view('welcome');
});*/

//ruta pruebas
Route::get('pruebas', function(){
    return view('pruebas');
});



Auth::routes();

//Rutas tienda
Route::get('/','CarouselPrincipalController@carousel')->name('index');
Route::get('bodas', 'TiendaController@bodas')->name('bodas');
Route::get('comuniones', 'TiendaController@comuniones')->name('comuniones');
Route::get('natalicios', 'TiendaController@natalicios')->name('natalicios');
Route::get('detalles', 'TiendaController@detalles')->name('detalles');
Route::get('contacto', 'TiendaController@contacto')->name('contacto');
Route::post('mensaje', ['as' => 'mensaje.store', 'uses' => 'MensajesController@store']);

Route::get('bodas/invitacion-boda-{url}','TiendaController@show')->name('detail-bodas');
Route::get('comuniones/{url}','TiendaController@show')->name('detail-comuniones');

Route::get('personalizar/{id}', 'TiendaController@personalizar')->name('personalizar');







//rutas USUARIO
Route::middleware(['auth'])->group(function () {
    Route::get('area-privada', function(){
        return view('usuarios.index');
    })->name('area-privada');

    Route::get('datos-personales', function(){
        return view('usuarios.datos-personales');
    })->name('datos-personales');

    Route::get('datos-de-entrega', function(){
        return view('usuarios.datos-de-entrega');
        //return view('usuarios.datos-de-entrega');
    })->name('datos_entrega');

    //datos personales
    Route::get('datos-personales/edit', 'UsersController@edit')->name('user.edit');
    Route::put('datos-personales/{id}', 'UsersController@update')->name('user.update');

    //direcciones
    Route::post('datos-de-entrega/add', 'DireccionesController@store')->name('direccion.add');

    //Route::get('datos-de-entrega', 'UsersController@derecciones')->name('datos-entrega');
});

//Rutas Carrito
Route::get('/carrito', 'CartController@show')->name('carrito');
Route::post('carrito/add/{producto}','CartController@add')->name('carrito-add');
Route::get('carrito/delete/{producto}','CartController@delete')->name('carrito-delete');
Route::get('carrito/delete/{producto}/{quantity}','CartController@update')->name('carrito-update');

//enviamos nuestro pedido a PayPal
Route::get('payment', array(
    'as' => 'payment',
    'uses' => 'PaypalController@postPayment'
));

//Paypal redirecciona a esta ruta
Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'PaypalController@getPaymentStatus'
));


//Datos de entrega
Route::get('entrega',[
    'middleware' => 'auth',
    'as' => 'entrega',
    function(){
        return view('carrito.direccion');
    }
]);

//Pago
Route::get('resumen',[
    'middleware' => 'auth',
    'as' => 'resumen',
    'uses' => 'CartController@resumen'
]);

//Pago con Stripe
Route::post('stripe', 'StripeController@cargoStripe')->name('charge');


//Route::post('mensaje', ['as' => 'mensaje.store', 'uses' => 'MensajesController@store']);

//Route::get('{tipo_producto}', 'TiendaController@producto')->name('bodas');
/*Route::get('{tipo_producto}',[
'as' => 'productos',
'uses' => 'TiendaController@producto'
]);*/

//Route::get('/home', 'HomeController@index')->name('home');

//Rutas página Web
/*Route::get('/', function () {
return view('index', compact('carouselP'));
})->name('index');*/

//bodas
/*Route::get('/bodas', function () {
return view('bodas');
})->name('bodas');*/

//comuniones
//Route::get('/comuniones', 'TiendaController@comunion')->name('comuniones');
//natalicios
/*Route::get('/natalicios', function () {
return view( 'natalicios');
})->name('natalicios');*/
//detalles
/*Route::get('/detalles', function () {
return view( 'detalles');
})->name('detalles');*/
//Route::get('/detalles', ['as' => 'detalles', 'uses' => 'ProductosController@saludo']);
/*Route::get('/detalles','ProductosController@saludo')->name('detalles');*/
//contactos


//Route::get('{url}', 'TiendaController@show')->name('descripcion');

//Route::get('/vista', function () {return view('vista');})->name('vista');


//rutas ADMIN
Route::middleware(['admin'])->group(function () {
    //  Route ::get('/home', function(){ return view('admin/home'); })->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    //Carousel Principal
    Route::resource('carousel-principal', 'CarouselPrincipalController');
    Route::get('/carousel-principal/activate/{id}', ['as' => 'carousel-principal.activate', 'uses' => 'CarouselPrincipalController@activate']);
    Route::get('/carousel-principal/hide/{id}', ['as' => 'carousel-principal.hide', 'uses' => 'CarouselPrincipalController@hide']);
    //Carousel Secundario
    Route::resource('carousel-secundario', 'CarouselSecundarioController');
    Route::get('/carousel-secundario/activate/{id}', ['as' => 'carousel-secundario.activate', 'uses' => 'CarouselSecundarioController@activate']);
    Route::get('/carousel-secundario/hide/{id}', ['as' => 'carousel-secundario.hide', 'uses' => 'CarouselSecundarioController@hide']);
    //Productos
    Route::resource('producto', 'ProductosController');
    Route::post('/producto/busqueda', ['as' => 'producto.busqueda', 'uses' => 'ProductosController@busqueda']);
    Route::get('/producto/activate/{id_producto}', ['as' => 'producto.activate', 'uses' => 'ProductosController@activate']);
    Route::get('/producto/hide/{id_producto}', ['as' => 'producto.hide', 'uses' => 'ProductosController@hide']);
    //Mensajes
    Route::get('mensajes', ['as' => 'mensajes.index', 'uses' => 'MensajesController@index']);
    Route::get('mensaje/{id_mensaje}', ['as' => 'mensaje.show', 'uses' => 'MensajesController@show']);
    //Pedido
    Route::resource('pedidos', 'PedidosController');
    Route::get('/detalle-del-pedido/{id}', 'PedidosController@detallePedido')->name('detalle-pedido');
    //Route::get('{num_pedido}', 'PedidosController@detallePdf')->name('detallePdf');
    Route::get('composicion/{id_composicion}', 'PedidosController@composicionPdf')->name('composicionPdf');

});







//correo
Route::get('sendemail', function(){
    $data = array(
        'name' => 'Dissol',
    );

    Mail::send('emails.welcome', $data, function($message){
        $message->from('mundigraphic@mundigraphic.es', 'Mundigraphic');

        $message->to('kekotorre@gmail.com')->subject('test');
    });

    return "tu email ha sido enviado correctamente";
});


Route::get('/register/verify/{code}', 'Auth\RegisterController@getConfirmation');
Route::get('pruebas', 'TiendaController@pruebas');
Route::get('/success', 'CartController@success')->name('success');

//Notificaciones
Route::get('/register_email', 'MensajesController@emailRegister');
