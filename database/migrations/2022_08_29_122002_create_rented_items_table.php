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
        Schema::create('rented_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_id')->unsigned();
            $table->bigInteger('renter_id')->unsigned();
            $table->string('rental_code', 100);
            $table->date('from_date');
            $table->date('to_date');
            $table->date('date_returned')->nullable();
            $table->timestamps();


            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('renter_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rented_items');
    }
};
