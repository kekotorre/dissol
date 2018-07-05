<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table ="direcciones";

    protected $fillable = ['direccion',
                            'pais',
                            'provincia',
                            'poblacion',
                            'cod_postal',
                          ];

    public function user(){
         return $this->belongsTo('App\User');
    }
}
