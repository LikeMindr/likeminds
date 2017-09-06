<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Event;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i <= 500; $i++) {
        	$event = new Event();
        	$event->description = $faker->bs;
        	$event->title = $faker->catchPhrase;
			$event->date = $faker->bs;
        	$event->location = $faker->bs;
        	$event->created_by = User::all()->random()->id;
        	$event->save();
        }

    }
}
