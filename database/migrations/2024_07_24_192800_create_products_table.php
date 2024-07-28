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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned(); // Nombre de columna corregido
            $table->string('model');
            $table->string('name');
            $table->string('description');
            $table->integer('stock');
            $table->integer('price');
            $table->string('uri');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories'); // Nombre de tabla corregido
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
