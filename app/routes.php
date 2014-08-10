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

Route::get('/', ['as' => 'home', 'uses' =>function()
{
	return View::make('layouts.home');
}]);

Route::get('teams', ['as' => 'team.index', 'uses' => 'TeamController@index']);
Route::get('team/{slug}', ['as' => 'team.show', 'uses' => 'TeamController@show']);

Route::get('players/{char?}', ['as' => 'player.index', 'uses' => 'PlayerController@index']);
Route::get('player/{slug}', ['as' => 'player.show', 'uses' => 'PlayerController@show']);