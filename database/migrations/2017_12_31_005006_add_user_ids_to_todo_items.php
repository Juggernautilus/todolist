<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdsToTodoItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('todolist', function($table){
            $table->integer('user_who_added');
            $table->integer('user_who_submitted');
            $table->integer('reward');
        });

        Schema::table('users', function($table){
            $table->integer('reward_points');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('todolist', function($table){
            $table->integer('user_who_added');
            $table->integer('user_who_submitted');
            $table->integer('reward');
        });

        Schema::drop('users', function($table){
            $table->integer('reward_points');
        });
    }
}
