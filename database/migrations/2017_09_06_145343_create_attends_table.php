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
		});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('attends');
    }
}
