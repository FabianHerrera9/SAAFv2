<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id('IDENTIFICACIONDOC');
            $table->string('NOMBREDOCENTE');
            $table->string('TELDOCENTE');
            $table->string('CORREODOCENTE');

            $table->bigInteger('IDTIPOID')->unsigned();
            $table->bigInteger('IDESPECIALIDAD_DOCENTE')->unsigned();

            $table->foreign('IDTIPOID')->references('IDTIPOID')->on('_tipo_id');
            $table->foreign('IDESPECIALIDAD_DOCENTE')->references('IDESPECIALIDAD_DOCENTE')->on('_especialidad_docentes');

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
        Schema::dropIfExists('docentes');
    }
}
