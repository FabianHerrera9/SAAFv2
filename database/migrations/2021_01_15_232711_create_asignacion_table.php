<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacion', function (Blueprint $table) {
            $table->id('IDASIGNACION');
            $table->dateTime('FECHAASING');
            $table->string('OBSERVACIONES');
            $table->enum('ESTADOASIG',['ACTIVO','INACTIVO']);

            $table->bigInteger('IDACTIVO')->unsigned();
            $table->bigInteger('IDENTIFICACIONDOC')->unsigned();
            $table->bigInteger('IDAMBIENTE')->unsigned();

            $table->foreign('IDACTIVO')->references('IDACTIVO')->on('activos');
            $table->foreign('IDENTIFICACIONDOC')->references('IDENTIFICACIONDOC')->on('docentes');
            $table->foreign('IDAMBIENTE')->references('IDAMBIENTE')->on('ambientes');

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
        Schema::dropIfExists('asignacion');
    }
}
