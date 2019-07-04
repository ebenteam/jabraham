<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovedadInvitadoTable extends Migration
{
       /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novedad_invitado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fecha');
            $table->string('observacion');
            $table->integer('estado_seguimiento_id')->unsigned();
            $table->foreign('estado_seguimiento_id')->references('id')->on('estado_seguimiento')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('invitado_id')->unsigned();
            $table->foreign('invitado_id')->references('id')->on('invitado')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('novedad_invitado');
    }
}
