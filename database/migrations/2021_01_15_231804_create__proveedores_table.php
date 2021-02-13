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

            $table->bigInteger('IDTIPOPROVID')->unsigned();
            $table->bigInteger('IDTIPOPROVEEDOR')->unsigned();

            $table->foreign('IDTIPOPROVID')->references('IDTIPOPROVID')->on('_tipo_prov_id');
            $table->foreign('IDTIPOPROVEEDOR')->references('IDTIPOPROVEEDOR')->on('_tipo_proveedor');

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
