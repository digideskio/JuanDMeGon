<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
|
| $portfolio variable have the definition of all the routes
| The definition is inside a function which will be passes 
| as argument to the route:group
|
*/
$portfolio = function()
{
	Route::get('/{lang?}', 'PersonController@showPerson');
	Route::post('message', array('before' => 'csrf', 'uses' => 'MessageController@sendMessage'));
	Route::get('message', function()
	{
		return $redirect = Redirect::to('/');
	});

	Route::get('change/{language}', 'PersonController@change');

	Route::pattern('all', '.*');

	Route::any('/{all}', function()
	{
		return $redirect = Redirect::to('/');
	});

	/*Route::get('/{all}', function()
	{
		return $redirect = Redirect::to('/');
	});*/

	/*Route::post('/{all}', function()
	{
		return $redirect = Redirect::to('/');
	});*/
};

/*
|--------------------------------------------------------------------------
| Application Routes groups
|--------------------------------------------------------------------------
|
| Here we define the respective groups by domain
| and his own routes function respectively
|
*/
Route::group(array('domain' => 'www.localjuandmegon.com'), $portfolio);
Route::group(array('domain' => 'www.juandmegon.com'), $portfolio);