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
            $table->enum('IDTIPOID',['C.C.','C.E.','P.P.']);

            $table->bigInteger('IDESPECIALIDAD_DOCENTE')->unsigned();
            $table->foreign('IDESPECIALIDAD_DOCENTE')->references('IDESPECIALIDAD_DOCENTE')->on('especialidad_docentes');

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
