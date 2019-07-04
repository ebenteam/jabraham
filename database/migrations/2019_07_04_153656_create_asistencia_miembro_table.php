<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciaMiembroTable extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencia_miembro', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fecha');
            $table->string('asistio');
            $table->string('peticion');
            $table->string('observacion');
            $table->integer('invitado_id')->unsigned();
            $table->foreign('invitado_id')->references('id')->on('invitado')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('celula_id')->unsigned();
            $table->foreign('celula_id')->references('id')->on('celula')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('asistencia_miembro');
    }
}
