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

Route::get('/random_user', function() {
	return 'This is for the random user generator';
});

Route::get('/lorem_ipsum', function() {
	return 'This is for the Lorem Ipsum Generator';
});

Route::get('/', function()
{
	return View::make('hello');
});
