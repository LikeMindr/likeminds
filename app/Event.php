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

	public static function search($q = '', $c = '') 
	{
		if($q != '' && $c == '') {
			$events =  Event::where('title', 'like', "%$q%")
						->orWhere('category', 'like', "%$q%")
						->orWhere('description', 'like', "%$q%")
						->orWhere('location', 'like', "%$q%")
						->orWhere('date', 'like', "%$q%")
						->orWhereHas('user', function($query) use ($q) {
							$query->where('name', 'like', "%$q%");
						})
						->orderBy('id', 'desc')
						->paginate(20);
			$events->appends(['q' => $q, $_SERVER['QUERY_STRING']]);
		}
		elseif($q == '' && $c != '') {
			$events = Event::where('category', '=', "$c")
					->orderBy('id', 'desc')
					->paginate(20);
			$events->appends(['c' => $c, $_SERVER['QUERY_STRING']]);
		}
		elseif($q != '' && $c != '') {
			$events =  Event::where('category', '=', "$c")
						->where( function($query) use ($q) {
							$query->where('title', 'like', "%$q%")
							->orWhere('category', 'like', "%$q%")
							->orWhere('description', 'like', "%$q%")
							->orWhere('location', 'like', "%$q%")
							->orWhere('date', 'like', "%$q%")
							->orWhereHas('user', function($query) use ($q) {
								$query->where('name', 'like', "%$q%");
							});
						})
						->orderBy('id', 'desc')
						->paginate(20);
			$events->appends(['q' => $q, 'c' => $c, $_SERVER['QUERY_STRING']]);
		}
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
			case "BUSINESSTECH":
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
			case "FILMTHEATER":
				return "/assets/img/cat-theater.jpg";
				break;
			case "FOODDRINK":
				return "/assets/img/cat-food.jpg";
				break;
			case "HEALTHWELLNESS":
				return "/assets/img/cat-fitness.jpg";
				break;
			case "OUTDOORSNATURE":
				return "/assets/img/cat-nature.jpg";
				break;
			case "SOCIAL":
				return "/assets/img/cat-social.jpg";
				break;
			case "SPECIALEVENTS":
				return "/assets/img/cat-special.jpg";
				break;
			case "SPORTSFITNESS":
				return "/assets/img/cat-sports.jpg";
				break;
		}
	}

	public static function correctName($name) 
	{
		switch ($name) {
			case "SPORTSFITNESS":
			return "SPORTS & FITNESS";
			break;
		case "SPECIALEVENTS":
			return "SPECIAL EVENTS";
			break;
		case "OUTDOORSNATURE":
			return "OUTDOORS & NATURE";
			break;
		case "HEALTHWELLNESS":
			return "HEALTH & WELLNESS";
			break;
		case "FOODDRINK":
			return "FOOD & DRINK";
			break;
		case "FILMTHEATER":
			return "FILM & THEATER";
			break;
		case "CIVICENGAGEMENT":
			return "CIVIC ENGAGEMENT";
			break;
		case "BUSINESSTECH":
			return "BUSINESS & TECH";
			break;
		case "BOOKS/POETRY/WRITING":
			return "BOOKS / POETRY / WRITING";
			break;
		case "HAPPYHOURS":
			return "HAPPY HOURS";
			break;
		default:
			return $name;
			break;
		}
	}

	public static function appendQuery($href)
	{
		$query = isset($_SERVER['QUERY_STRING']) ? '&' . $_SERVER['QUERY_STRING'] : '';
		
		return $href . $query;
	}

	public static function allCats() 
	{
		return Event::select('category')->groupBy('category')->get();
	}
}
