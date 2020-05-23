<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contactoemergencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ContactoEmergencia', function(Blueprint $table){
            $table->increments('id');
            $table->integer('nua');
            $table->string('apaterno');
            $table->string('amaterno');
            $table->string('nombres');
            $table->string('telefono');
            $table->string('calle');
            $table->string('colonia');
            $table->integer('numero');
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
        Schema::dropIfExists('ContactoEmergencia');
    }
}
