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
        Schema::create('activos', function (Blueprint $table) {
            $table->id('IDACTIVO');
            $table->string('NOMBREACTIVO');
            $table->string('SERIALACTIVO');
            $table->string('MARCAACTIVO');
            $table->string('MODELOACTIVO');
            $table->string('DESCACTIVO');
            $table->dateTime('GARANTIAACTIVO');
            $table->enum('IDCLASEACTIVO',['TANGIBLE,INTANGIBLE']);

            $table->bigInteger('IDENTIFICACIONPROV')->unsigned();
            $table->bigInteger('IDENTIFICACIONUSU')->unsigned();
            $table->foreign('IDENTIFICACIONUSU')->references('IDENTIFICACIONUSU')->on('usuarios');
            $table->foreign('IDENTIFICACIONPROV')->references('IDENTIFICACIONPROV')->on('proveedores');

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
