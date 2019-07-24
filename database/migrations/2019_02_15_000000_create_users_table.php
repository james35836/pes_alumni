<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('access')->default('member');
            $table->string('position')->default('member');
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('type')->default(0);
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('auth')->nullable();
            $table->integer('pin_id')->unsigned();
            $table->foreign('pin_id')->references('id')->on('pins')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
