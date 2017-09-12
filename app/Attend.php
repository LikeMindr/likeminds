<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;
use Event;

class Attend extends Model
{
	public $timestamps = false;

    public function user() 
	{
		return $this->belongsTo('App\User', 'event_id');
	}

	public function event()
	{
		return $this->belongsTo('App\Event', 'user_id');
	}

	public static function remove($id) {
		Attend::where('event_id', '=', "$id")->delete();
	}

	public static function cancel($event_id, $user_id) {
		Attend::where('event_id', '=', "$event_id")
			->where('user_id', '=', "$user_id")
			->delete();
	}

}
