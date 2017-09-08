<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Attend;

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

	public static function trends() 
	{
		$trends = Event::select('category')
					->get();

		$str = "";

		foreach($trends as $trend) {
			$str .= $trend['category'];
			$str .= " ";
		}

		$arr = explode(" ", $str);
		$trendsArr = [];
		$count = array_count_values($arr);
		asort($count);
		$reverse = array_reverse($count);

		foreach($reverse as $key => $value) {
			if (!in_array($key, $trendsArr) && strlen($key) > 4) {
				$trendsArr[] = $key;
			}
			if (count($trendsArr) >= 5) {
				break;
			}
		}

		return $trendsArr;
	}
}
