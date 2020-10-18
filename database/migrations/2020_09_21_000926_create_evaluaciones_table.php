<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->id();
            $table->string('actividad_docencia_tiempo');
            $table->string('actividad_investigacion_tiempo');
            $table->string('extension_vinculacion_tiempo');
            $table->string('administracion_academica_tiempo');
            $table->string('otras_actividades_tiempo');
            $table->string('actividad_docencia_e');
            $table->string('actividad_investigacion_e');
            $table->string('extension_vinculacion_e');
            $table->string('administracion_academica_e');
            $table->string('otras_actividades_e');
            $table->string('actividad_docencia_mb');
            $table->string('actividad_investigacion_mb');
            $table->string('extension_vinculacion_mb');
            $table->string('administracion_academica_mb');
            $table->string('otras_actividades_mb');
            $table->string('actividad_docencia_b');
            $table->string('actividad_investigacion_b');
            $table->string('extension_vinculacion_b');
            $table->string('administracion_academica_b');
            $table->string('otras_actividades_b');
            $table->string('actividad_docencia_r');
            $table->string('actividad_investigacion_r');
            $table->string('extension_vinculacion_r');
            $table->string('administracion_academica_r');
            $table->string('otras_actividades_r');
            $table->string('actividad_docencia_d');
            $table->string('actividad_investigacion_d');
            $table->string('extension_vinculacion_d');
            $table->string('administracion_academica_d');
            $table->string('otras_actividades_d');
            $table->string('actividad_docencia_total');
            $table->string('actividad_investigacion_total');
            $table->string('extension_vinculacion_total');
            $table->string('administracion_academica_total');
            $table->string('nota_final');
            $table->string('comentario_secretario');
            $table->foreignId('id_academico')->constrained('academicos');
            $table->foreignId('id_comision')->constrained('comisiones');
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
        Schema::dropIfExists('evaluaciones');
    }
}
