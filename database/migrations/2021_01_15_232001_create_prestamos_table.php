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
            $table->id();
            $table->date('FechaPrestamo');
            $table->date('FechaDevolucion');
            $table->string('Observaciones',100);
            $table->enum('Estado',['Activo','Inactivo']);
            $table->enum('Tipo',['Prestamo','Asignacion']);

            $table->bigInteger('IdActivo')->unsigned()->unique();
            $table->bigInteger('IdDocente')->unsigned();
            $table->bigInteger('IdUsuario')->unsigned();
            $table->bigInteger('IdAmbiente')->unsigned();

            $table->foreign('IdActivo')->references('id')->on('activos');
            $table->foreign('IdDocente')->references('id')->on('docentes');
            $table->foreign('IdUsuario')->references('id')->on('users');
            $table->foreign('IdAmbiente')->references('id')->on('ambientes');

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
