<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarantiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garantias', function (Blueprint $table) {
            $table->id('IDGARANTIA');
            $table->dateTime('FECHAGARANTIA');
            $table->string('RAZONGARANTIA');
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
        Schema::dropIfExists('garantias');
    }
}
