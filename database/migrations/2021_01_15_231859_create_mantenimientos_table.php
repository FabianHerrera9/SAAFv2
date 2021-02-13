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
            $table->string('MOTIVOMANTENIMIENTO');
            $table->string('PROVEEDOR');
            $table->string('NOMTECNICO');
            $table->string('TRABAJOREALIZADO');
            $table->boolean('SOLUCION');
            $table->string('ACTASERVICIO');

            $table->bigInteger('IDACTIVO')->unsigned();

            $table->foreign('IDACTIVO')->references('IDACTIVO')->on('_activos');

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
