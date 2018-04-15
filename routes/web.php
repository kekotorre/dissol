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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


//Rutas página Web
/*Route::get('/', function () {
  return view('index', compact('carouselP'));
})->name('index');*/
Route::get('/','CarouselPrincipalController@carousel')->name('index');
//bodas
Route::get('/bodas', function () {
  return view('bodas');
})->name('bodas');
//comuniones
Route::get('/comuniones', function () {
  return view('comuniones');
})->name('comuniones');
//natalicios
Route::get('/natalicios', function () {
  return view( 'natalicios');
})->name('natalicios');
//detalles
/*Route::get('/detalles', function () {
  return view( 'detalles');
})->name('detalles');*/
//Route::get('/detalles', ['as' => 'detalles', 'uses' => 'ProductosController@saludo']);
Route::get('/detalles','ProductosController@saludo')->name('detalles');
//contactos
Route::get('/contacto', function () {
  return view( 'contacto');
})->name('contacto');

Route::get('/vista', function () {return view('vista');})->name('vista');

//rutas USUARIO
Route::resource('area-privada', 'UsersController');
Route::post('mensaje', ['as' => 'mensaje.store', 'uses' => 'MensajesController@store']);
//Route::post('mensaje', ['as' => 'mensaje.store', 'uses' => 'MensajesController@store']);


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


});
