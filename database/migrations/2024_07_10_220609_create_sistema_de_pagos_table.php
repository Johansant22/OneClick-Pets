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
        Schema::create('sistema_de_pagos', function (Blueprint $table) {
            $table->id();
            $table->string('forma_pago',45); //Es para elegir la forma de pago.
            $table->timestamps();
            //Relación 1:M con cabeza factura
            $table->unsignedBigInteger('cabeza_de_factura');
            $table->foreignId('cabeza_de_factura')->references('id')->on('cabeza_de_facturas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sistema_de_pagos');
    }
};
