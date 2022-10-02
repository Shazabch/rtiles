<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id'); 
            $table->foreign('customer_id')->references('id')->on('customers'); 
            $table->string('size');
            $table->string('article_no');
            $table->string('grade')->default('AAA');
            $table->string('box');
            $table->string('packing'); // 1.44 
            $table->string('measurement')->default('meter'); // total meters  box * packing
            $table->string('price');
            $table->string('total_price');
            // (total boxes * measurement ) * price = total amount
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
        Schema::dropIfExists('sales');
    }
}
