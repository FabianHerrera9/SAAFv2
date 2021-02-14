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
        Schema::create('_proveedores', function (Blueprint $table) {
            $table->id('IDENTIFICACIONPROV');
            $table->string('NOMBREPROVEEDOR');
            $table->string('TELPROVEEDOR');
            $table->string('CORREOPROVEEDOR');
            $table->string('DIRECCIONPROVEEDOR');
            $table->enum('IDTIPOPROVID',['NIT','CC']);
            $table->enum('IDTIPOPROVEEDOR',['TANGIBLE','INTANGIBLE']);

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
