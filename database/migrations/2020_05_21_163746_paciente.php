<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Paciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function(Blueprint $table){
            $table->increments('id');
            $table->integer('NUA');
            $table->boolean('PrimerCont');
            $table->boolean('Reinicio');
            $table->string('Nombres');
            $table->string('APaterno');
            $table->string('AMaterno');
            $table->string('Fotografia');
            $table->string('Sexo');
            $table->integer('Edad');
            $table->string('EstadoCivil');
            $table->string('Telefono');
            $table->date('FechaNacimiento');
            $table->string('Estado');
            $table->string('Municipio');
            $table->string('CalleR');
            $table->string('ColoniaR');
            $table->integer('NumeroR');
            $table->string('CalleO');
            $table->string('ColoniaO');
            $table->integer('NumeroO');
            $table->string('ServicioSalud');
            $table->string('NSS');
            $table->date('FechaIngreso');
            $table->string('Periodo');
            $table->string('Campus');
            $table->integer('Division_Id');
            $table->integer('PE_Id');
            $table->string('Informacion');
            $table->string('Correo');
            $table->string('Contrasena');
            $table->string('Recomendaciones');
            $table->string('Observaciones');
            $table->string('role');
            $table->rememberToken();
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
        Schema::dropIfExists('pacientes');
    }
}
