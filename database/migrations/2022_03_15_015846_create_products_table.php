<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->longText('description');
            $table->string('image');
            $table->timestamps();

            $table->foreign('admin_id')->on('admins')->references('id')->OnDelete('cascade');
            $table->foreign('category_id')->on('categories')->references('id')->OnDelete('cascade');
            $table->foreign('sub_category_id')->on('sub_categories')->references('id')->OnDelete('cascade');
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
}
