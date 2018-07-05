<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $table ="productos";
  //protected $primaryKey = "id";
  protected $fillable = ['referencia',
                          'nombre',
                          'tipo_producto',
                          'url',
                          'precio',
                          'descuento',
                          'cantidad_descuento',
                          'formato',
                          'medidas',
                          'tipo_papel',
                          'descripcion',
                          'portada_principal',
                          'portada',
                          'dorso',
                          'visible',
                          'composicion_ejemplo'
                        ];
}
