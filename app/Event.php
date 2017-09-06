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
}
