<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoffeeOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffee_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable();
            $table->integer('pkg_id')->nullable();
            $table->integer('pkg_sub_id')->nullable();
            $table->double('price',10,2)->nullable();
            $table->double('total',10,2)->nullable();
            $table->date('order_date')->nullable();
            $table->date('delivary_date')->nullable();
            $table->string('plan_id')->nullable();
            $table->string('status')->default('order')->nullable();
            $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coffee_orders');
    }
}
