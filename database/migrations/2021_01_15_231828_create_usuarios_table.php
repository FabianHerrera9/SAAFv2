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
            $table->id();
            $table->string('Identificacion',15);
            $table->string('Name',30);
            $table->string('Job',10);
            $table->string('Tel',15);
            $table->string('Email',30)->unique();
            $table->string('Password');
            $table->enum('Tipoid',['C.C.','C.E.','P.P.']);
            $table->enum('Rol',['Administrador','Tesorero','Contador']);

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
