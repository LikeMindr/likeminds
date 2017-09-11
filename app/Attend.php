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
		return $this->belongsTo('App\User', 'user_id');
	}

	public function event()
	{
		return $this->belongsTo('App\Event', 'event_id');
	}
}
