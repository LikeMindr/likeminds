<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;
use App\Http\Controllers\Input;
use Auth;
use App\Attend;

use Storage;


class EventsController extends Controller
{
	public function __construct() 
	{
		$this->middleware("auth", ['except' => ["show", "index"]]);
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
		if ($request->has('q') && !$request->has('c')) {
			$q = Input::escape($request->q);
			$c = '';
			$events = Event::search($q, $c);
		}

		if ($request->has('c') && !$request->has('q')) {
			$c = Input::escape($request->c);
			$q = '';
			$events = Event::search($q, $c);
		}

		if ($request->has('q') && $request->has('c')) {
			$q = Input::escape($request->q);
			$c = Input::escape($request->c);
			$events = Event::search($q, $c);
		}

		if (!$request->has('c') && !$request->has('q')) {
			$events = Event::with('user')->orderBy('id', 'desc')->paginate(20);
		}

		
		$trends = Event::trends();

        return view('events/index', ['events' => $events, 'trends' => $trends]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('events/create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event();

		$event->title = $request->title;
		$event->description = $request->description;
		$event->date = date('F jS Y', strtotime($request->date));
		$event->time = date('g:i a', strtotime($request->time));
		$event->location = $request->location;
		$event->category = $request->category;
		$event->num_people = $request->num_people;
		$event->created_by = Auth::id();
		$event->save();

		if($request->file('file') != NULL) {
			$file = $request->file('file');
			$filename = "e-" . $event->id . '.' . $file->getClientOriginalExtension();
			Storage::put(
				'img/' . $filename,
				file_get_contents($file->getRealPath())
			);
			$event->image = '/img/' . $filename;	
		}
        $event->save();

		return \Redirect::action('EventsController@show', $event->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$event = Event::findOrFail($id);
		return view('events.show', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$event = Event::findOrFail($id);
		return view('events.edit', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$event = Event::findOrFail($id);
		
		$event->title = $request->title;
		$event->description = $request->description;
		$event->date = date('F jS Y', strtotime($request->date));
		$event->time = date('g:i a', strtotime($request->time));
		$event->location = $request->location;
		$event->category = $request->category;
		$event->num_people = $request->num_people;
		$event->created_by = Auth::id();

		if($request->file('file') != NULL) {
			$file = $request->file('file');
			$filename = "e-" . $event->id . '.' . $file->getClientOriginalExtension();
			Storage::put(
				'img/' . $filename,
				file_get_contents($file->getRealPath())
			);
			$event->image = '/img/' . $filename;
		}

		if($request->default_img == "yes") {
			$image = $event->image;
			if (Storage::disk('local')->has($image)) {
				Storage::delete($image);
				$event->image = NULL;
			}
		}
		$event->save();

		return \Redirect::action('EventsController@show', $event->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$event = Event::findOrFail($id);
		Attend::remove($id);
		$event->delete();

		return \Redirect::action('EventsController@index');
    }

	public function image($cat) 
	{
		switch($cat) {
			case "MUSIC":
				return "storage/app/cat-dance.jpg";
				break;
			case  "HAPPY HOURS":
				return "storage/app/cat-happyhour.jpg";
				break;
		}
	}
}
