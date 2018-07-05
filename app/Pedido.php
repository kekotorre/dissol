<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Composicion;

class Pedido extends Model
{
    protected $table ="pedidos";
    protected $fillable = ['numero_pedido', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function composicion(){
        return $this->hasMany(Composicion::class);
    }

}
