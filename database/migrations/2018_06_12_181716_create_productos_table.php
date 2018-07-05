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
            $table->increments('id');
            $table->integer('referencia');
            $table->string('nombre');
            $table->string('tipo_producto');
            $table->string('url');
            //precio producto
            $table->decimal('precio',2);
            $table->boolean('descuento')->default(false);
            $table->decimal('porcentaje',2)->nullable();;
            //caracteristicas del producto
            $table->string('formato')->nullable();
            $table->string('medidas');
            $table->string('tipo_papel');
            $table->string('descripcion');
            //Fotos del producto
            $table->string('portada_principal');
            $table->string('portada');
            $table->string('dorso')->nullable();
            $table->string('interior')->nullable();

            //Fotos de alta calidad del productos
            $table->string('portada_high');
            $table->string('dorso_high')->nullable();
            $table->string('interior_high')->nullable();

            //Composición de ejemplo del productos
            $table->json('composicion_ejemplo');

            //Estado del producto en venta
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
