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

Route::get('/', ['as' => 'home', 'uses' => 'WelcomeController@index']);

Route::group(['middleware' => 'auth'], function () {
	//Route::controllers(['lists' => 'ListsController']);
	Route::get('lists/{lists}/delete', ['as' => 'lists.delete', 'uses' => 'ListsController@delete']);
	Route::resource('lists', 'ListsController');

	Route::get('schedules/{schedules}/delete', ['as' => 'schedules.delete', 'uses' => 'schedulesController@delete']);
	Route::resource('schedules', 'SchedulesController');

	Route::get('subjects/{subjects}/delete', ['as' => 'subjects.delete', 'uses' => 'subjectsController@delete']);
	Route::resource('subjects', 'SubjectsController');
});