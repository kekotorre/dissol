<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codigo_descuento extends Model
{
    protected $table ="codigo_descuentos";
    protected $fillable = ['codigo',
                            'porcentaje',
                            'duracion',
                          ];
}
