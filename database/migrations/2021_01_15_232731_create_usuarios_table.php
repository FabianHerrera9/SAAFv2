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
            $table->string('CORREOUSU');
            $table->binary('CONTASEÑAUSU');

            $table->bigInteger('IDTIPOID')->unsigned();

            $table->foreign('IDTIPOID')->references('IDTIPOID')->on('_tipo_id');

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
