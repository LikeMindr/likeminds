<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class AccountsController extends Controller
{
	public function __construct() 
	{
		$this->middleware("auth", ['except' => ["show"]]);
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$user = User::findOrFail($id);
        return view('accounts.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$user = User::findOrFail($id);
        return view('/accounts.edit', ['user' => $user]);
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
		$user = User::findOrFail($id);

		$user->name = $request->name;
		$user->location = $request->location;
		$user->bio = $request->bio;
		$user->facebook = $request->facebook;
		$user->twitter = $request->twitter;
		$user->pinterest = $request->pinterest;
		$user->instagram = $request->instagram;
		$user->save();

		if($request->file('file') != NULL) {
			$file = $request->file('file');
			$filename = "e-" . $user->id . '.' . $file->getClientOriginalExtension();
			Storage::put(
				'img/' . $filename,
				file_get_contents($file->getRealPath())
			);
		}
		return \Redirect::action('AccountsController@show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
