<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('fathers_name_or_husband_name_value');
            $table->string('fathers_name_or_husband_name');
            $table->string('mothers_name');
            $table->string('date_of_birth');
            $table->string('religion');
            $table->string('gender');
            $table->integer('NID_NO_or_Birth_ID_value');
            $table->string('NID_NO_or_Birth_ID');
            $table->string('mobile_no');
            $table->string('image');
            $table->string('NID_font_image');
            $table->string('NID_back_image');
            $table->string('father_or_mother_image');
            $table->string('NID_font_father_or_mother_image');
            $table->string('NID_back_father_or_mother_image');
            $table->string('permanent_address');
            $table->string('present_address');
            $table->tinyInteger('status')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('fathers_name_or_husband_name_value');
            $table->dropColumn('fathers_name_or_husband_name');
            $table->dropColumn('mothers_name');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('religion');
            $table->dropColumn('gender');
            $table->dropColumn('NID_NO_or_Birth_ID_value');
            $table->dropColumn('NID_NO_or_Birth_ID');
            $table->dropColumn('mobile_no');
            $table->dropColumn('image');
            $table->dropColumn('NID_font_image');
            $table->dropColumn('NID_back_image');
            $table->dropColumn('father_or_mother_image');
            $table->dropColumn('NID_font_father_or_mother_image');
            $table->dropColumn('NID_back_father_or_mother_image');
            $table->dropColumn('permanent_address');
            $table->dropColumn('present_address');
            $table->dropColumn('status');
        });
    }
}
