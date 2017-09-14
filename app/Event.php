<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Attend;
use Storage;

class Event extends Model
{
    protected $table = 'events';

	public function user()
	{
		return $this->belongsTo('App\User', 'created_by');
	}

	public function attends()
	{
		return $this->hasMany('App\Attend', 'event_id');
	}

	public static function search($q) 
	{
		$events =  Event::where('title', 'like', "%$q%")
					->orWhere('category', 'like', "%$q%")
					->orWhere('description', 'like', "%$q%")
					->orWhere('location', 'like', "%$q%")
					->orWhereHas('user', function($query) use ($q) {
						$query->where('name', 'like', "%$q%");
					})
					->orderBy('id', 'desc')
					->paginate(20);
		$events->appends(['q' => $q]);
		return $events;
	}

	public static function category($c)
	{
		$events = Event::where('category', '=', "$c")
					->orderBy('id', 'desc')
					->paginate(20);
		$events->appends(['c' => $c]);
		return $events;
	}

	public static function trends() 
	{
		$trends = Event::select('category')
					->get();

		$arr = [];

		foreach($trends as $trend) {
			$arr[] = $trend['category'];
		}

		$trendsArr = [];
		$count = array_count_values($arr);
		asort($count);
		$reverse = array_reverse($count);

		foreach($reverse as $key => $value) {
			if (!in_array($key, $trendsArr)) {
				$trendsArr[] = $key;
			}
			if (count($trendsArr) >= 5) {
				break;
			}
		}

		return $trendsArr;
	}

	public static function defaultImage($cat) {
		
		switch($cat) {
			case "MUSIC":
				return "/assets/img/cat-dance.jpg";
				break;
			case  "HAPPYHOURS":
				return "/assets/img/cat-happyhour2.jpg";
				break;
			case "ART":
				return "/assets/img/cat-art.jpg";
				break;
			case "BOOKS/POETRY/WRITING":
				return "/assets/img/cat-book.jpg";
				break;
			case "BUSINESS&TECH":
				return "/assets/img/cat-business.jpg";
				break;
			case "CIVICENGAGEMENT":
				return "/assets/img/cat-civic.jpg";
				break;
			case "COMEDY":
				return "/assets/img/cat-comedy.jpg";
				break;
			case "DANCE":
				return "/assets/img/cat-dance.jpg";
				break;
			case "DEALS":
				return "/assets/img/cat-deals.jpg";
				break;
			case "FASHION":
				return "/assets/img/cat-fashion.jpg";
				break;
			case "FILM&THEATER":
				return "/assets/img/cat-theater.jpg";
				break;
			case "FOOD&DRINK":
				return "/assets/img/cat-food.jpg";
				break;
			case "HEALTH&WELLNESS":
				return "/assets/img/cat-fitness.jpg";
				break;
			case "OUTDOORS&NATURE":
				return "/assets/img/cat-nature.jpg";
				break;
			case "SOCIAL":
				return "/assets/img/cat-social.jpg";
				break;
			case "SPECIALEVENTS":
				return "/assets/img/cat-special.jpg";
				break;
			case "SPORTS&FITNESS":
				return "/assets/img/cat-sports.jpg";
				break;
		}
	}
}
