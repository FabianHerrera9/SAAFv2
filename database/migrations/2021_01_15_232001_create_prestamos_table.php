<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id('IDPRESTAMO');
            $table->dateTime('FECHAPRESTAMO');
            $table->string('OBSERVACIONES');
            $table->enum('ESTADOPRESTAMO',['ACTIVO','INACTIVO']);

            $table->bigInteger('IDACTIVO')->unsigned();
            $table->bigInteger('IDENTIFICACIONDOC')->unsigned();

            $table->foreign('IDACTIVO')->references('IDACTIVO')->on('_activos');
            $table->foreign('IDENTIFICACIONDOC')->references('IDENTIFICACIONDOC')->on('docentes');

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
        Schema::dropIfExists('prestamos');
    }
}
