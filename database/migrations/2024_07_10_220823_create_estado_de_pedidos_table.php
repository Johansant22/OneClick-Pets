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
        Schema::create('estado_de_pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('comentario_pedido'); //es el estado del pedido (entregado, en camino, etc...)
            $table->timestamps();
            //Relación 1:1 con cabeza de factura
            $table->unsignedBigInteger('cabeza_de_factura');
            $table->foreignId('cabeza_de_factura')->references('id')->on('cabeza_de_facturas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estado_de_pedidos');
    }
};
