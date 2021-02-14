<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->id('IDMANTENIMIENTO');
            $table->dateTime('FECHAMANTENIMIENTO');
            $table->string('MOTIVOMANTENIMIENTO',50);
            $table->string('PROVEEDOR',75);
            $table->string('NOMTECNICO',30);
            $table->string('TRABAJOREALIZADO',200);
            $table->enum('SOLUCION',['SOLUCIONADO','NO-SOLUCIONADO']);
            $table->binary('ACTASERVICIO');

            $table->bigInteger('IDACTIVO')->unsigned();
            $table->foreign('IDACTIVO')->references('IDACTIVO')->on('activos');

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
        Schema::dropIfExists('mantenimientos');
    }
}
