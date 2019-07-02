<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Celula extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celula', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fecha_inicio');
            $table->string('nombre');
            $table->string('lider');
            $table->string('timoteo');
            $table->string('anfitrion');
            $table->string('ayuda_one');
            $table->string('ayuda_two');
            $table->integer('barrio_id')->unsigned();
            $table->foreign('barrio_id')->references('id')->on('barrio')->onDelete('cascade')->onUpdate('cascade');
            $table->string('direccion')->nullable();
            $table->string('celular')->nullable();
            $table->string('mail')->nullable();
            $table->integer('coordenadas')->unsigned();
            $table->integer('sede_id')->unsigned();
            $table->foreign('sede_id')->references('id')->on('sede')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('perfil_celula_id')->unsigned();
            $table->foreign('perfil_celula_id')->references('id')->on('perfil_celula')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('celula');
    }
}
