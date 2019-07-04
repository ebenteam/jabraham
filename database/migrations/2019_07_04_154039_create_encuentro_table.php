<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuentroTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuentro', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fecha_inicio');
            $table->integer('fecha_fin');
            $table->string('tema');
            $table->string('observacion');
            $table->integer('tipo_encuentro_id')->unsigned();
            $table->foreign('tipo_encuentro_id')->references('id')->on('tipo_encuentro')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('encuentro');
    }
}
