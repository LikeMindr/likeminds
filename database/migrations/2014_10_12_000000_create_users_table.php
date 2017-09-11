<?php

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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
			$table->string('location');
			$table->string('avatar');
			$table->text('bio');
			$table->string('question');
			$table->string('answer');
			$table->string('preference1');
			$table->string('preference2');
			$table->string('preference3');
			$table->string('facebook');
			$table->string('twitter');
			$table->string('pinterest');
			$table->string('instagram');
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
        Schema::drop('users');
    }
}
