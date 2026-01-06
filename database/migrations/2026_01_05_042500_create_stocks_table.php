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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('products_id');
            $table->integer('amount');
            $table->decimal('cost', 13);
            $table->dateTime('last_order');
            $table->dateTime('last_restock')->nullable();
            $table->integer('min_stock');
            $table->text('reason_adjust_min')->nullable();
            $table->decimal('sales', 13)->nullable();
            $table->timestamps();

            $table->foreign('products_id')->references('id')->on('products')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
