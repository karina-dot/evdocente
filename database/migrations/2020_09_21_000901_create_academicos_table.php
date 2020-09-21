<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicos', function (Blueprint $table) {
            $table->id();
            $table->string('rut_academico');
            $table->string('nombre_academico');
            $table->string('apellido_academico');
            $table->string('titulo_profesional');
            $table->string('grado_academico');
            $table->foreignId('id_departamento')->constrained('departamentos');
            $table->string('categoria');
            $table->string('horas');
            $table->string('tipo_planta');
            $table->string('estado_academico');
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
        Schema::dropIfExists('academicos');
    }
}
