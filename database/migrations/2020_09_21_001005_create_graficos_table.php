<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraficosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graficos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_academico');
            $table->foreignId('id_academico')->references('id')->on('academicos');
            $table->unsignedInteger('id_facultad');
            $table->foreignId('id_facultad')->references('id')->on('facultad');
            $table->string('year_grafico');
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
        Schema::dropIfExists('graficos');
    }
}
