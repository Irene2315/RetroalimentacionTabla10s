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
        Schema::create('cantidad_productos', function (Blueprint $table) {
            $table->id('id');
            $table->date('fecha');
            $table->time('hora');
            $table->integer('cantidad');
            $table->unsignedBigInteger('idProducto');
            $table->timestamps();

            $table->foreign('idProducto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cantidad_productos');
    }
};