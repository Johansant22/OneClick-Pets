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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social');
            $table->integer('nit');
            $table->string('objeto_social');
            $table->timestamps();
            $table->unsignedBigInteger('tercero_id'); // Cambiar el nombre a tercero_id para evitar duplicados

            $table->foreign('tercero_id')->references('id')->on('terceros')->onDelete('cascade')->onUpdate('cascade'); // Definir la relación correcta
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
