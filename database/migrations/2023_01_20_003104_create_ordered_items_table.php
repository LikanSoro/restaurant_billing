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
        Schema::create('ordered_items', function (Blueprint $table) {
            $table->id('ordered_item_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('item_id');
            $table->foreign('order_id')->references('order_id')->on('manage_orders');
            $table->foreign('item_id')->references('item_id')->on('add_item');
            $table->integer('quantity');
            $table->integer('price');
            
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
        Schema::dropIfExists('ordered_items');
    }
};
