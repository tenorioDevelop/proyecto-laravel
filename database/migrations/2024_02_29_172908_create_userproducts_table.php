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
        Schema::create('userproducts', function (Blueprint $table) {
            // Establecer las dos columnas como claves primarias
            $table->primary(['id_user', 'id_product']);
            
            // Definir las columnas de id_user, id_product y cantidad
            $table->integer('id_user');
            $table->integer('id_product');
            $table->integer('cantidad'); // Añadir el atributo cantidad
            
            // Opcional: agregar restricciones de clave foránea si es necesario
            // $table->foreign('id_user')->references('id')->on('users');
            // $table->foreign('id_product')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userproducts');
    }
};
