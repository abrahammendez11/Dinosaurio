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
        Schema::create('dtevaluacion', function (Blueprint $table) {
            $table->id();
            $table->date('fechaRegistroEvaluacion');
            $table->string('criterioUno');
            $table->string('criterioDos');
            $table->string('criterioTres');
            $table->string('criterioCuatro');
            $table->string('criterioCinco');
            $table->string('criterioSeis');
            $table->string('criterioSiete');
            $table->string('criterioOcho');
            $table->string('Observaciones');
            $
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dtevaluacion');
    }
};
