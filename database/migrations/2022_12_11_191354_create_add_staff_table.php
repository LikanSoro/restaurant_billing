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
        Schema::create('add_staff', function (Blueprint $table) {
            $table->id('staff_id');
            $table->string('name',60);
            $table->string('job_role',20);
            $table->date('joining_date');
            $table->string('contact',10);
            $table->string('address',50);
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
        Schema::dropIfExists('add_staff');
    }
};
