<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('image');
            $table->string('designation');
            $table->tinyInteger('status')->default(1);
            $table->date('deadline');
            $table->string('qualification');
            $table->string('location');
            $table->string('experience');
            $table->longText('job_description');
            $table->string('age');
            $table->integer('vacancy');
            $table->string('employment_status');
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
        Schema::dropIfExists('job_posts');
    }
}
