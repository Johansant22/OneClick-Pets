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
        Schema::create('promociones_descuentos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_promocion',45);
            $table->string('tipo_descuento',45);
            $table->string('valor_descuento',45);
            $table->dateTime('fecha_inicial');
            $table->dateTime('fecha_final');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promociones_descuentos');
    }
};
