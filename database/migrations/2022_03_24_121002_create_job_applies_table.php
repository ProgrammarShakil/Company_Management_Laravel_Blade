<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id');
            $table->string('designation');
            $table->string('full_name');
            $table->string('guardian_value');
            $table->string('fathers_name_or_husband_name');
            $table->string('mothers_name');
            $table->string('running_designation');
            $table->string('date_of_birth');
            $table->integer('age');
            $table->string('religion');
            $table->string('education');
            $table->string('nationality');
            $table->string('email');
            $table->string('district');
            $table->string('gender');
            $table->bigInteger('NID_NO');
            $table->bigInteger('Birth_ID');
            $table->bigInteger('mobile_no');
            $table->string('image');
            $table->string('signature_image');
            $table->longText('permanent_address');
            $table->longText('present_address');
            $table->timestamps();

            $table->foreign('job_id')->on('job_posts')->references('id')->OnDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_applies');
    }
}
