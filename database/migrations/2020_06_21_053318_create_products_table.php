<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->string('sku')->nullable(true);
            $table->decimal('price', 10,2);
            $table->decimal('qty', 10,2);
            $table->string('description')->nullable(true);
            $table->string('color')->nullable(true);
            $table->string('size')->nullable(true);
            $table->string('brands')->nullable(true);
            $table->string('category')->nullable(true);
            $table->string('store')->nullable(true);
            $table->boolean('availability')->nullable(true);
            $table->boolean('isActive')->nullable(true);
            $table->string('created_by')->nullable(true);
            $table->string('updated_by')->nullable(true);
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
}
