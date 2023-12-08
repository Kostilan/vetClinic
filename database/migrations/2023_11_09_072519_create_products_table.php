<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->integer('article')->unique();
            $table->string('photo',200)->default('');
            $table->integer('product_quantity');
            $table->string('product_purpose',800);
            $table->integer('cost');
            $table->foreignId('product_type_id')->constrained('product_types');
            $table->foreignId('product_special_id')->constrained('product_specials');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
