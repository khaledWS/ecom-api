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
            $table->string('product_name')->comment('Product name');
            $table->string('slug')->unique()->comment('slug is a unique identifier for the product');
            $table->string('product_short_description')->nullable()->comment('this is the product short description');
            $table->string('product_description')->nullable()->comment('this is the product description');
            $table->decimal('price',5,2)->comment('this is the product price');
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
