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
		$categories = ["MUSIC", "HAPPY HOURS", "ART", "FILM & THEATER", "DANCE",
		"COMEDY", "SPORTS & FITNESS", "SPECIAL EVENTS", "FASHION", "SOCIAL", "FOOD & DRINK",
		"BOOKS / POETRY / WRITING", "OUTDOORS & NATURE", "HEALTH & WELLNESS", "BUSINESS & TECH",
		"CIVIC ENGAGEMENT", "DEALS"];

        for($i = 0; $i <= 500; $i++) {
        	$event = new Event();
        	$event->description = $faker->paragraph;
        	$event->title = $faker->catchPhrase;
			$event->category = $categories[mt_rand(0, 16)];
			$event->date = $faker->date($format = "F jS Y");
        	$event->location = $faker->address;
        	$event->created_by = User::all()->random()->id;
        	$event->save();
        }

    }
}
