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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->integer('valor_compra');
            $table->integer('porcentaje_ganancia');
            $table->string('color_producto');
            $table->float('peso_producto');
            $table->timestamps();
            $table->dateTime('fecha_vencimento');
            $table->integer('tamaño');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
