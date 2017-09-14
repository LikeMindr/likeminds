<?php

use Illuminate\Database\Seeder;
use App\Event;
use App\User;
use App\Attend;

class AttendTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		for($i = 0; $i < 100; $i++) {
			$attend = new Attend();
			$attend->user_id = User::all()->random()->id;
			$attend->event_id = Event::all()->random()->id;
			$attend->save();
		}
    }
}
