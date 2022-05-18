<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempservicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempservicio', function (Blueprint $table) {
            $table->integer('num')->references('id')->on('ordenservicio')
            ->onUpdate('cascade')
      ->onDelete('cascade');
      $table->date('iniciodia');
      $table->date('terminadia');
      $table->time('iniciohora');
      $table->time('terminahora');
            $table->integer('servicio')->references('id')->on('servicios')
            ->onUpdate('cascade')
      ->onDelete('cascade');
      
      $table->string('token_user',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempservicio');
    }
}
