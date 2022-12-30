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
            $table->integer('cat_id')->comment('This is category id');
            $table->integer('subcat_id')->comment('This is subcategory id');
            $table->integer('brand_id')->comment('This is brand id');
            $table->integer('unit_id')->comment('This is unit id');
            $table->integer('size_id')->comment('This is size id');
            $table->integer('color_id')->comment('This is color id');
            $table->string('product_code');
            $table->string('product_name');
            $table->longText('description');
            $table->float('product_price');
            $table->text('image');
            $table->tinyInteger('status')->default(1);
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
