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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nick');
            $table->string('password');
            $table->string('nombre');
            $table->enum('raza', ['Boxer', 'Bulldog', 'Labrador', 'Caniche']);
            $table->enum('sexo', ['macho', 'hembra']);
            $table->string('edad');
            $table->string('color');
            $table->string('nombreHumano');
            $table->string('telefono');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
