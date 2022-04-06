<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavslidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navsliders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();
            $table->unsignedTinyInteger('priority');
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
        Schema::dropIfExists('navsliders');
    }
}
