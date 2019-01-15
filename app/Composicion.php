<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pedido;
use App\Producto;

class Composicion extends Model
{
    protected $table ="composicion";
    protected $fillable = ['cantidad',
    'precio_unidad',
    'precio_total',
    'composicion',
    'pedido_id',
    'producto_id'
];

public function pedido(){
    return $this->belongsTo(Pedido::class);
}

public function producto(){
    return $this->hasOne(Producto::class, 'id');
}
}
