<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinisterioTable extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ministerio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fecha');
            $table->string('descripcion');
            $table->integer('lider_id')->unsigned();
            $table->foreign('lider_id')->references('id')->on('miembro')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('ministerio');
    }
}
