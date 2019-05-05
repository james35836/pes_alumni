<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('thumbnail')->nullable();
            $table->string('name')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('place')->nullable();
            
            $table->text('description')->nullable();
            $table->timestamps();
            $table->string('type')->default('event_post');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
