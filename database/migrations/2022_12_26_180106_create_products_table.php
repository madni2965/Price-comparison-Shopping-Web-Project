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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('short_description')->nullable();
    $table->text('description')->nullable();
            $table->decimal('amazon_price',8,2);
            $table->decimal('ebay_price',8,2);
            $table->decimal('alibaba_price',8,2);
           
            $table->string('SKU');
            $table->boolean('featured')->default(false);
            $table->unsignedInteger('quantity')->default(10);
            $table->string('image');
            $table->text('images')->nullable();
            $table->bigInteger('catagory_id')->unsigned()->nullable();               
            $table->timestamps();
            $table->foreign('catagory_id')->references('id')->on('catagories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
