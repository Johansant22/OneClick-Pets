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
        Schema::create('terceros', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre1');
            $table->string('Nombre2');
            $table->string('Apellido1');
            $table->string('Apellido2');
            $table->string('Direccion');
            $table->integer('Num_identificacion');
            $table->string('Correo')->unique();
            $table->string('Telefono');
            $table->timestamps();

            // Relación 1:1 con la tabla tipo_documento
            $table->unsignedBigInteger('tipo_documento_id');
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documentos')->onDelete('cascade')->onUpdate('cascade');

            // Relación 1:1 con ciudad
            $table->unsignedBigInteger('ciudad_id');
            $table->foreign('ciudad_id')->references('id')->on('ciudads')->onDelete('cascade')->onUpdate('cascade');

            // Relación 1:1 con departamento
            $table->unsignedBigInteger('departamento_id');
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade')->onUpdate('cascade');

            // Relación 1:1 con tipo_tercero
            $table->unsignedBigInteger('tipo_tercero_id');
            $table->foreign('tipo_tercero_id')->references('id')->on('tipo_terceros')->onDelete('cascade')->onUpdate('cascade');

            // Relación 1:1 con genero
            $table->unsignedBigInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terceros');
    }
};
