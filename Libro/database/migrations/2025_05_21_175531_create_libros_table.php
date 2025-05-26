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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('isbn')->unique();
            $table->string('titulo',50);
            $table->string('genero',20);
            $table->string('autor',120);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
