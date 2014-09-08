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

Route::get('/', ['as' => 'home', 'uses' => 'PageController@home']);

// Organisations
Route::get('organisations', ['as' => 'organisation.index', 'uses' => 'OrganisationController@index']);
Route::get('organisation/{id}', ['as' => 'organisation.show', 'uses' => 'OrganisationController@show']);

// Team
Route::get('teams', ['as' => 'team.index', 'uses' => 'TeamController@index']);
Route::get('team/{id}', ['as' => 'team.show', 'uses' => 'TeamController@show']);

// Player
Route::get('players/{char?}', ['as' => 'player.index', 'uses' => 'PlayerController@index']);
Route::get('player/{slug}', ['as' => 'player.show', 'uses' => 'PlayerController@show']);

// Tournament
Route::get('tournaments', ['as' => 'tournament.index', 'uses' => 'TournamentController@index']);
Route::get('tournament/{slug}', ['as' => 'tournament.show', 'uses' => 'TournamentController@show']);
Route::get('tournament/{slug}/{teamSlug}', ['as' => 'tournament.team.show', 'uses' => 'TeamTournamentController@show']);

// Matches
Route::get('matches', ['as' => 'match.index', 'uses' => 'MatchController@index']);
Route::get('match/{slug}', ['as' => 'match.show', 'uses' => 'MatchController@show']);

// Search
Route::post('search', ['as' => 'search.store', 'uses' => 'SearchController@store']);
Route::get('search/{term}', ['as' => 'search.index', 'uses' => 'SearchController@index']);