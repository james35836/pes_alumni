<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('profile')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('contact')->nullable();
            $table->string('gender')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('current_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('college_school')->nullable();
            $table->string('college_graduated')->nullable();
            $table->string('high_school')->nullable();
            $table->string('high_graduated')->nullable();
            $table->text('biography')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('fb_link')->default('https://www.facebook.com/');
            $table->string('twitter_link')->default('https://www.twitter.com/');
            $table->string('instagram_link')->default('https://www.instagram.com/');
            $table->string('linkedin_link')->default('https://www.linkedin.com/');
            $table->string('work')->nullable();
            $table->string('work_position')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('userinfos');
    }
}
