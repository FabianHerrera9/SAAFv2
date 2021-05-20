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
            $table->id();
            $table->string('NombreActivo',15);
            $table->string('SN',20);
            $table->string('Marca',15);
            $table->string('Modelo',15);
            $table->string('Descripcion',100);
            $table->date('Garantia');
            $table->enum('TipoActivo', ['Tangible','Intangible']);

            $table->bigInteger('IdProveedor')->unsigned();
            $table->bigInteger('IdUsuario')->unsigned();

            $table->foreign('IdUsuario')->references('id')->on('usuarios');
            $table->foreign('IdProveedor')->references('id')->on('proveedores');

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
