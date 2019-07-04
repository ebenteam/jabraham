<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitadoTable extends Migration
{
       /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fecha');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('celular');
            $table->string('mail')->nullable();
            $table->integer('identificacion');
            $table->integer('num_boleta');
            $table->string('fecha_nacimiento');
            $table->string('peticion');
            $table->string('direccion');
            $table->integer('coordenadas')->unsigned();
            $table->integer('sede_id')->unsigned();
            $table->foreign('sede_id')->references('id')->on('sede')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('fuente_llegada_id')->unsigned();
            $table->foreign('fuente_llegada_id')->references('id')->on('fuente_llegada')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('otra_iglesia_id')->unsigned();
            $table->foreign('otra_iglesia_id')->references('id')->on('otra_iglesia')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('consolidado_por_id')->unsigned();
            $table->foreign('consolidado_por_id')->references('id')->on('consolidado_por')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quien_invita_id')->unsigned();
            $table->foreign('quien_invita_id')->references('id')->on('quien_invita')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('miembro_id')->unsigned();
            $table->foreign('miembro_id')->references('id')->on('miembro')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('invitado');
    }
}
