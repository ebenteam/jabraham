<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiembrosMinisterioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembros_ministerio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('detalle');
            $table->integer('miembro_id')->unsigned();
            $table->foreign('miembro_id')->references('id')->on('miembro')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('cargos_ministerio_id')->unsigned();
            $table->foreign('cargos_ministerio_id')->references('id')->on('cargos_ministerio')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('miembros_ministerio');
    }
}
