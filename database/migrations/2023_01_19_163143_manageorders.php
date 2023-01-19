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
        Schema::create('manage_orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->unsignedBigInteger('table_id');
            $table->foreign('table_id')->references('table_id')->on('add_table');
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('item_id')->on('add_item');
            $table->unsignedBigInteger('staff_id');
            $table->foreign('staff_id')->references('staff_id')->on('add_staff');
            $table->integer('quantity');
            $table->integer('totalPrice');
            $table->integer('tax');
            $table->integer('totalPriceWithTax');
            $table->boolean('orderStatus')->nullable()->default(false);
            $table->boolean('billPaid')->nullable()->default(false);
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
        Schema::dropIfExists('manage_orders');
    }
};
