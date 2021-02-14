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
            $table->string('RAZONGARANTIA',50);
            $table->string('PROVEEDOR',75);
            $table->string('NOMTECNICO',30);
            $table->string('TRABAJOREALIZADO',200);
            $table->enum('SOLUCION',['SOLUCIONADO','NO-SOLUCIONADO']);
            $table->binary('ACTASERVICIO');

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
