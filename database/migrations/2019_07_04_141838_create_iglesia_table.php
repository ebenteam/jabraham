<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIglesiaTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iglesia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fecha');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('mail');
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
        Schema::dropIfExists('iglesia');
    }
}
