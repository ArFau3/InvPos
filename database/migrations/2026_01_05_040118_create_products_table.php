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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('barcode')->nullable();
            $table->decimal('price', 13);
            $table->string('thumbnail');
            $table->string('foto1')->nullable();
            $table->string('foto2')->nullable();
            $table->string('foto3')->nullable();
            $table->integer('discount')->nullable();
            $table->timestamps();
            $table->foreignId('categories_id');
            $table->foreignId('brands_id')->nullable();

            $table->foreign('brands_id')->references('id')->on('brands')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('categories_id')->references('id')->on('categories')
                ->onUpdate('cascade')->onDelete('cascade');
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
