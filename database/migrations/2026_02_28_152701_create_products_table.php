<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('productos', function (Blueprint $table) {
        $table->id('id_producto');            // Clave primaria
        $table->string('nombre', 100);        // Nombre del producto
        $table->text('descripcion')->nullable(); // Descripción opcional
        $table->decimal('precio', 10, 2);     // Precio con dos decimales
        $table->integer('stock');             // Cantidad disponible
        $table->timestamps();                 // Fechas de creación y actualización
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
