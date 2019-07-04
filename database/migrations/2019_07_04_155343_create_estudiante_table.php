<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nota1')->unsigned();
            $table->integer('nota2')->unsigned();
            $table->integer('nota3')->unsigned();
            $table->integer('definitiva')->unsigned();
            $table->integer('miembro_id')->unsigned();
            $table->foreign('miembro_id')->references('id')->on('miembro')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('estado_nivel_id')->unsigned();
            $table->foreign('estado_nivel_id')->references('id')->on('estado_nivel')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('periodo_nivel_id')->unsigned();
            $table->foreign('periodo_nivel_id')->references('id')->on('periodo_nivel')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('estudiante');
    }
}
