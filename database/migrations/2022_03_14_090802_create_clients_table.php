<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('designation');
            $table->string('facebook')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('youtube')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('instagram')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('twitter')->nullable();
            $table->string('twitter_link')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
