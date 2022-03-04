<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfermerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfermeras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->bigInteger('telefono');
            $table->string('CURP',25);
            $table->string('RFC',25);
            $table->text('disponibilidad');
            $table->date('nacimiento');
            $table->text('general');
            $table->string('imagen',100);
            $table->string('tipo_imagen',100);
            $table->text('tipo_enfermera');
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
        Schema::dropIfExists('enfermeras');
    }
}
