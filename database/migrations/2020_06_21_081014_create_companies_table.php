<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('company_id');
            $table->string('company_name');
            $table->decimal('charge_amount', 10,2);
            $table->decimal('var_charge_percentage', 10,2);
            $table->string('address')->nullable(true);
            $table->string('phone')->nullable(true);
            $table->string('country')->nullable(true);
            $table->string('message')->nullable(true);
            $table->decimal('currency', 10,2);
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
        Schema::dropIfExists('companies');
    }
}
