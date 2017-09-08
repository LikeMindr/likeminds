<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('category');
			$table->string('description');
			$table->string('date');
			$table->string('time');
			$table->string('location');
			$table->integer('num_people')->unsigned();
			$table->integer('created_by')->unsigned();
			$table->timestamps();
			$table->foreign('created_by')
				->references('id')
				->on('users');
		});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('events', function($table)
		{
			$table->dropForeign(['created_by']);

		});

        Schema::drop('events');

    }
}
