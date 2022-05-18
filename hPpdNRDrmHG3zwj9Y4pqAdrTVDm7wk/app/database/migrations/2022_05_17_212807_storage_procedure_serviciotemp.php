<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class StorageProcedureServiciotemp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $procedure = "
        CREATE PROCEDURE add_tempservicio(servicio varchar(100), cliente varchar(200), token_user varchar(100), diainicio DATE, horainicio TIME, diafinal DATE, horafinal TIME)
        BEGIN
                DECLARE precio_actual int(11);
                DECLARE service int(11);
                DECLARE client int(11);
                

                SELECT precio INTO precio_actual FROM servicios WHERE nombre = servicio;
                
                SELECT id INTO service FROM servicios WHERE nombre = servicio;
                
                SELECT id INTO client FROM clientes WHERE nombre = cliente;

                INSERT INTO tempservicio VALUES(client,diainicio,diafinal,horainicio,horafinal,service,token_user);

                SELECT C.nombre, S.nombre, S.precio, T.iniciodia, T.iniciohora, T.terminadia, T.terminahora
                FROM tempservicio T
                INNER JOIN clientes C
                ON T.num = C.id
                INNER JOIN servicios S
                ON T.servicio = S.id
                WHERE T.token_user = token_user;



        END 
        ";
        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    $procedure = "
    DROP PROCEDURE IF EXISTS add_tempservicio";
        DB::unprepared($procedure);
    }
}
