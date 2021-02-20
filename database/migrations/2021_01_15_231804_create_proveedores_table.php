<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('Provid',15);
            $table->string('ProvName',30);
            $table->string('Tel',15);
            $table->string('Email',50);
            $table->string('ProvDir',50);
            $table->enum('Tipoid',['NIT','CC']);
            $table->enum('Tipoprov',['Tangibles','Intangibles']);

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
        Schema::dropIfExists('_proveedores');
    }
}
