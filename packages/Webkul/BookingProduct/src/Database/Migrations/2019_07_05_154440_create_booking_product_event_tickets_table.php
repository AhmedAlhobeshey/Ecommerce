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
        Schema::create('booking_product_event_tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('price', 12, 4)->default(0)->nullable();
            $table->integer('qty')->default(0)->nullable();

            $table->integer('booking_product_id')->unsigned();
            $table->foreign('booking_product_id')->references('id')->on('booking_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_product_event_tickets');
    }
};
