<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodoNivelTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodo_nivel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('maestro_id')->unsigned();
            $table->foreign('maestro_id')->references('id')->on('maestro')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('nivel_id')->unsigned();
            $table->foreign('nivel_id')->references('id')->on('nivel')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('periodo_escuela_id')->unsigned();
            $table->foreign('periodo_escuela_id')->references('id')->on('periodo_escuela')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('periodo_nivel');
    }
}
