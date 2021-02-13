<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_activos', function (Blueprint $table) {
            $table->id('IDACTIVO');
            $table->string('NOMBREACTIVO');
            $table->string('SERIALACTIVO');
            $table->string('MARCAACTIVO');
            $table->string('MODELOACTIVO');
            $table->string('DESCACTIVO');
            $table->dateTime('GARANTIAACTIVO');

            $table->bigInteger('IDCLASEACTIVO')->unsigned();
            $table->bigInteger('IDENTIFICACIONPROV')->unsigned();

            $table->foreign('IDCLASEACTIVO')->references('IDCLASEACTIVO')->on('_clase_activo');
            $table->foreign('IDENTIFICACIONPROV')->references('IDENTIFICACIONPROV')->on('_proveedores');

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
        Schema::dropIfExists('_activos');
    }
}
