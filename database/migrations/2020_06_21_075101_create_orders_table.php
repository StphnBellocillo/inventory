<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->string('customer_name');
            $table->string('customer_address');
            $table->string('customer_phone');
            $table->string('product_name');
            $table->decimal('qty', 10,2);
            $table->decimal('rate', 10,2);
            $table->decimal('amount', 10,2);
            $table->decimal('gross_amount', 10,2);
            $table->decimal('vat', 10,2);
            $table->decimal('discount', 10,2);
            $table->decimal('net_amount', 10,2);
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
        Schema::dropIfExists('orders');
    }
}
