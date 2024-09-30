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
        Schema::create('users_admin', function (Blueprint $table) {
            $table->id();
            $table->string('nombreAdministrativo');
            $table->string('correoElectronico')->unique();
            $table->timestamp('correoElectronico_verified_at')->nullable();
            $table->string('contraseña');
            $table->rememberToken();
            $table->string('foto_perfil', 2048)->nullable();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('correoElectronico')->primary();
            $table->string('token');
            $table->timestamp('creado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_admin');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
