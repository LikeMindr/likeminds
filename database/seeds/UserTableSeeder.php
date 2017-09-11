<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

      	for($i = 0; $i <= 25; $i++) {
        	$user = new User();
        	$user->name = $faker->name;
        	$user->password = $faker->password;
        	$user->email = $faker->safeEmail;
			$user->location = $faker->city .", " . $faker->stateAbbr;
			$user->avatar = $faker->imageUrl;
			$user->bio = $faker->text;
			$user->question = "If you were stranded on a desert island, what item would you need?";
			$user->answer = "My teddy bear and blanky.";
			$user->preference1 = "MUSIC";
			$user->preference2 = "DANCE";
			$user->preference3 = "CIVIC ENGAGEMENT";
			$user->facebook = "https://facebook.com";
			$user->twitter = "https://twitter.com";
			$user->pinterest = "https://pinterest.com";
			$user->instagram = "https://instagram.com";
        	$user->save();
        }

    }
}
