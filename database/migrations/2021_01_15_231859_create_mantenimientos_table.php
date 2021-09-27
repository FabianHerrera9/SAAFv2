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
            $table->id();
            $table->enum('Tipo', ['Mantenimiento', 'Garantia']);
            $table->date('Fecha');
            $table->string('ProblemaFallo', 50);
            $table->string('ProveedorServ', 75);
            $table->string('Reparador', 30);
            $table->string('TrabajoRealizado', 200);
            $table->enum('Solucion', ['Solucionado', 'No-Solucionado']);
            $table->string('ActaServicio',100);
            $table->bigInteger('IdActivo')->unsigned()->unique();


            $table->foreign('IdActivo')->references('id')->on('activos');

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
