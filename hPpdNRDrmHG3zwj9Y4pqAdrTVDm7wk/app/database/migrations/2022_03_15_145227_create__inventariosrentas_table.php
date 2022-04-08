<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosrentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_inventariosrentas', function (Blueprint $table) {
            $table->string('cod_barras',200)->primary();
            $table->string('nombre',100);
            $table->text('descripcion');
            $table->integer('percio');
            $table->integer('cantidad');
            $table->integer('proveedor_id');
            $table->string('tipo_consumible',100);
            $table->string('lote',100);
            $table->string('imagen',255);
            $table->string('tipo_foto',255);
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
        Schema::dropIfExists('_inventariosrentas');
    }
}
