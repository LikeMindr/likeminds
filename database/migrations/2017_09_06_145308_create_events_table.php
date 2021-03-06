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
			$table->string('image');
			$table->integer('num_people')->unsigned();
			$table->integer('created_by')->unsigned();
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
        Schema::drop('events');
    }
}
