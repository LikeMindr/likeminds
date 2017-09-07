<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('attends', function(Blueprint $table)
	   {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('event_id')->unsigned();
			$table->foreign('user_id')
				->references('id')
				->on('users');
			$table->foreign('event_id')
				->references('id')
				->on('events');
		});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		
		Schema::table('attends', function($table)
		{
			$table->dropForeign(['user_id']);

		});

		
		Schema::table('attends', function($table)
		{
			$table->dropForeign(['event_id']);

		});

        Schema::drop('attends');
    }
}
