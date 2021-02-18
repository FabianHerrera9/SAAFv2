<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('IDENTIFICACIONUSU');
            $table->string('NOMBREUSU');
            $table->string('CARGOUSU');
            $table->string('TELEFONOUSU');
            $table->string('CORREOUSU')->unique();
            $table->string('CONTASEÑAUSU');
            $table->enum('IDTIPOID',['C.C.','C.E.','P.P.']);
            $table->enum('ROL',['Administrador','Tesorero','Contador']);

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
        Schema::dropIfExists('usuarios');
    }
}
