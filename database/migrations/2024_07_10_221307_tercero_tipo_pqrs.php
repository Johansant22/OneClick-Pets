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
        Schema::create('tercero_tipo_pqrs', function (Blueprint $table) {
            $table->id();
            //Asignacion de claves foraneas
            $table->unsignedBigInteger('tercero_id');
            $table->unsignedBigInteger('tipo_pqrs_id');
            $table->timestamps();

            $table->foreign('tercero_id')->references('id')->on('terceros')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tipo_pqrs_id')->references('id')->on('tipo_de_pqrs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tercero_tipo_pqrs');
    }
};
