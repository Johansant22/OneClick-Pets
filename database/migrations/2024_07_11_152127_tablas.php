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
        Schema::create('tipo_documentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->timestamps();
        });

        Schema::create('ciudads', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_ciudad');
            $table->string('codigo_ciudad');
            $table->timestamps();
        });

        Schema::create('departamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_departamento');
            $table->string('codigo_departamento');
            $table->timestamps();
        });

        Schema::create('generos', function (Blueprint $table) {
            $table->id();
            $table->string('categoria_genero');
            $table->timestamps();
        });

        Schema::create('tipo_terceros', function (Blueprint $table) {
            $table->id();
            $table->string('categoria_tercero');
            $table->timestamps();
        });

        Schema::create('terceros', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre1');
            $table->string('Nombre2')->nullable();
            $table->string('Apellido1');
            $table->string('Apellido2')->nullable();
            $table->string('Direccion');
            $table->string('Num_identificacion');
            $table->string('Correo')->unique();
            $table->string('Telefono');
            $table->string('contrasena');
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

        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social');
            $table->integer('nit');
            $table->string('objeto_social');
            $table->timestamps();
            $table->unsignedBigInteger('tercero_id');
            $table->foreign('tercero_id')->references('id')->on('terceros')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->integer('valor_compra');
            $table->integer('porcentaje_ganancia');
            $table->string('color_producto');
            $table->float('peso_producto');
            $table->dateTime('fecha_vencimento');
            $table->integer('tamaño');
            $table->timestamps();
        });

        Schema::create('control_devoluciones', function (Blueprint $table) {
            $table->id();
            $table->integer('total_devoluciones');
            $table->timestamps();
        });

        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_movimiento');
            $table->string('descripcion_movimiento');
            $table->timestamps();

            // Relación 1:M con tabla control devoluciones
            $table->unsignedBigInteger('control_devolucion_id');
            $table->foreign('control_devolucion_id')->references('id')->on('control_devoluciones')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad_inicial');
            $table->integer('cantidad_final');
            $table->integer('cantidad_total');
            $table->integer('cantidad_entradas');
            $table->integer('valor_venta');
            $table->integer('precio_unit_entradas');
            $table->string('total_entradas');
            $table->integer('precio_total_entradas');
            $table->integer('cantidad_salidas');
            $table->integer('precio_unit_salidas');
            $table->string('total_salidas');
            $table->float('precio_total_salidas');
            $table->timestamps();

            // Relación 1:M con la tabla tercero
            $table->unsignedBigInteger('tercero_id');
            $table->foreign('tercero_id')->references('id')->on('terceros')->onDelete('cascade')->onUpdate('cascade');

            // Relación 1:M con la tabla productos
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');

            // Relación 1:M con tabla movimiento
            $table->unsignedBigInteger('movimiento_id');
            $table->foreign('movimiento_id')->references('id')->on('movimientos')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('control_de_comentarios', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_comentarios');
            $table->dateTime('tiempo_bloqueo');
            $table->timestamps();
        });

        Schema::create('calificacion_servicios', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_servicio', 45);
            $table->integer('calificacion');
            $table->string('comentario_servicio');
            $table->timestamps();

            // Relación 1:M con control de comentarios
            $table->unsignedBigInteger('control_de_comentarios_id');
            $table->foreign('control_de_comentarios_id')->references('id')->on('control_de_comentarios')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('cabeza_de_facturas', function (Blueprint $table) {
            $table->id();
            $table->float('total');
            $table->dateTime('fecha_compra');
            $table->timestamps();

            // Relación 1:M con la tabla tercero
            $table->unsignedBigInteger('tercero_id');
            $table->foreign('tercero_id')->references('id')->on('terceros')->onDelete('cascade')->onUpdate('cascade');

            // Relación 1:M con la tabla empresa
            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade')->onUpdate('cascade');

            // Relación 1:M con la tabla calificacion_servicios
            $table->unsignedBigInteger('calificacion_servicio_id');
            $table->foreign('calificacion_servicio_id')->references('id')->on('calificacion_servicios')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('estado_de_pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('comentario_pedido');
            $table->timestamps();

            // Relación 1:1 con cabeza de factura
            $table->unsignedBigInteger('cabeza_de_factura_id');
            $table->foreign('cabeza_de_factura_id')->references('id')->on('cabeza_de_facturas')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('cuerpo_de_facturas', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad_productos');
            $table->integer('total_productos');
            $table->timestamps();

            // Relación 1:M con la tabla inventario
            $table->unsignedBigInteger('inventario_id');
            $table->foreign('inventario_id')->references('id')->on('inventarios')->onDelete('cascade')->onUpdate('cascade');

            // Relación 1:1 con la tabla cabeza_factura
            $table->unsignedBigInteger('cabeza_de_factura_id');
            $table->foreign('cabeza_de_factura_id')->references('id')->on('cabeza_de_facturas')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('sistema_de_pagos', function (Blueprint $table) {
            $table->id();
            $table->string('forma_pago', 45);
            $table->timestamps();

            // Relación 1:M con cabeza factura
            $table->unsignedBigInteger('cabeza_de_factura_id');
            $table->foreign('cabeza_de_factura_id')->references('id')->on('cabeza_de_facturas')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('tipo_de_pqrs', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tipo_pqrs');
            $table->string('descripcion_tipo_pqrs');
            $table->timestamps();
        });

        Schema::create('catalogos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_produto');
            $table->timestamps();

            // Relación 1:M con la tabla inventario
            $table->unsignedBigInteger('inventario_id');
            $table->foreign('inventario_id')->references('id')->on('inventarios')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('tercero_tipo_pqrs', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('tipo_documentos');
        Schema::dropIfExists('ciudads');
        Schema::dropIfExists('departamentos');
        Schema::dropIfExists('generos');
        Schema::dropIfExists('tipo_terceros');
        Schema::dropIfExists('terceros');
        Schema::dropIfExists('empresas');
        Schema::dropIfExists('productos');
        Schema::dropIfExists('control_devoluciones');
        Schema::dropIfExists('movimientos');
        Schema::dropIfExists('inventarios');
        Schema::dropIfExists('estado_de_pedidos');
        Schema::dropIfExists('control_de_comentarios');
        Schema::dropIfExists('calificacion_servicios');
        Schema::dropIfExists('cabeza_de_facturas');
        Schema::dropIfExists('cuerpo_de_facturas');
        Schema::dropIfExists('sistema_de_pagos');
        Schema::dropIfExists('tipo_de_pqrs');
        Schema::dropIfExists('catalogos');
        Schema::dropIfExists('tercero_tipo_pqrs');
    }

};
