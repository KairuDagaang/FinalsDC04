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
        Schema::create('merchandises', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 60);
            $table->string('description');
            $table->decimal('retail_price', 8, 2);
            $table->decimal('whole_sale_price', 8, 2);
            $table->unsignedInteger('whole_sale_qty'); 
            $table->unsignedInteger('qty_stock'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchandises');
    }
};
