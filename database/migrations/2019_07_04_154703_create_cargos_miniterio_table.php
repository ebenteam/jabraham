<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosMiniterioTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos_ministerio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('detalle');
            $table->integer('ministerio_id')->unsigned();
            $table->foreign('ministerio_id')->references('id')->on('ministerio')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('cargos_ministerio');
    }
}
