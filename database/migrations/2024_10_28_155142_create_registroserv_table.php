<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registroserv', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreDependencia');
            $table->string('direccionDependencia');
            $table->string('correoElectronico');
            $table->integer('telefonoDependencia');
            $table->string('areaAdscripcion');
            $table->string('nombreJefeInmediato');
            $table->string('cargoJefeInmediato');
            $table->string('nombreProyecto');
            $table->integer('ctcatdependencia_id');
            $table->foreign('ctcatdependencia_id')->references('dtRegistroDependencia_id')->on('ctcatdependencia') ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registroserv');
    }
};
