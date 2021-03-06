<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/facebook', 'Auth\AuthController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleFacebookCallback');
Route::get('auth/google', 'Auth\AuthController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\AuthController@handleGoogleCallback');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/privacy', function() {
	return view('privacypolicy');
});

Route::get('/about', function() {
	return view('about');
});

Route::get('/test', function() {
	return view('auth.test');
});

Route::resource('events', 'EventsController');

Route::resource('accounts', 'AccountsController');

Route::resource('attends', 'AttendsController');

Route::any('attends/cancel/{event_id}/{user_id}', 
	['as' => 'attends.cancel', 'uses' => 'AttendsController@cancel']);

