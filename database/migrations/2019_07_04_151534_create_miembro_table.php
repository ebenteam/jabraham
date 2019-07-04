<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiembroTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('tipo_documento')->nullable();
            $table->integer('identificacion')->nullable();
            $table->integer('fecha_nacimiento')->nullable();
            $table->string('direccion')->nullable();
            $table->string('celular')->nullable();
            $table->string('mail')->nullable();
            $table->integer('sede_id')->unsigned();
            $table->foreign('sede_id')->references('id')->on('sede')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('miembro');
    }
}
