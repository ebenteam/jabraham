<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciaEncuentroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencia_encuentro', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('celula_id')->unsigned();
            $table->foreign('celula_id')->references('id')->on('celula')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('encuentro_id')->unsigned();
            $table->foreign('encuentro_id')->references('id')->on('encuentro')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('asistencia_encuentro');
    }
}
