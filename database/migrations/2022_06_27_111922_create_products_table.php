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
            $table->id('id');
            $table->string('product_name');
            $table->string('product_description');
            $table->integer('product_quantity')->unsigned();
            $table->decimal('sale_price',15,2);
            $table->decimal('purchase_price',15,2);
            $table->unsignedBigInteger('product_barcode');
            $table->unsignedBigInteger('category_fid');
            $table->foreign('category_fid')->references('id')->on('categories');
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
        Schema::dropIfExists('products');
    }
};
