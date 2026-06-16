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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
                $table->unsignedBigInteger('cliente_id');
                $table->unsignedBigInteger('provincia_id');
                $table->decimal('monto_total', 10, 2);
                $table->date('fecha_emision');
                $table->date('fecha_vencimiento');
                $table->string('estado', 20);
                $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
                $table->foreign('provincia_id')->references('id')->on('provincias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
