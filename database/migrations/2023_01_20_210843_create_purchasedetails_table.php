<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchasedetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId("purchase_id")->constrained("purchases");
            $table->string('article_no');
            $table->string('size');
            $table->string('grade')->default('AAA');
            $table->string('packing');
            $table->integer('box');
            $table->string('measurement')->default('1.44');
            $table->string('price');
            $table->string('total_price');
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
        Schema::dropIfExists('purchasedetails');
    }
}
