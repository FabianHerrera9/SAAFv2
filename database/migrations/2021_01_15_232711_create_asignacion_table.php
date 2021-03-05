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
            $table->id();
            $table->dateTime('Fecha');
            $table->string('Observaciones');
            $table->enum('Estado',['Activo','Inactivo']);

            $table->bigInteger('IdActivo')->unsigned();
            $table->bigInteger('IdDocente')->unsigned();
            $table->bigInteger('IdAmbiente')->unsigned();
            $table->bigInteger('IdUsuario')->unsigned();

            $table->foreign('IdActivo')->references('id')->on('activos');
            $table->foreign('IdDocente')->references('id')->on('docentes');
            $table->foreign('IdAmbiente')->references('id')->on('ambientes');
            $table->foreign('IdUsuario')->references('id')->on('usuarios');


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
