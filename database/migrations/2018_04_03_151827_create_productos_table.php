<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id_producto');
            $table->integer('referencia');
            $table->string('nombre');
            $table->string('tipo_producto');
            $table->string('url');
            //precio producto
            $table->float('precio');
            $table->tinyInteger('descuento');
            $table->float('porcentaje');
            //caracteristicas del producto
            $table->string('formato')->nullable();
            $table->string('medidas');
            $table->string('tipo_papel');
            $table->string('descripcion');
            //Fotos del producto
            $table->string('portada_principal');
            $table->string('portada');
            $table->string('dorso');
            $table->string('interior')->nullable();

            $table->boolean('visible')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
