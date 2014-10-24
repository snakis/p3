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

Route::get('/random_user/{query?}', function() {

	$num_users = Input::get('num_users');
	$address = Input::get('address');
	$profile = Input::get('profile');
	$faker = Faker\Factory::create();	

	return View::make('random_user')
	->with('faker', $faker)
	->with('num_users', $num_users)
	->with('address', $address)
	->with('profile', $profile);
});

Route::get('/lorem_ipsum/{query?}', function() {

	$num_paragraphs = Input::get('num_paragraphs');
	
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($num_paragraphs);

	return View::make('lorem_ipsum')
	->with('num_paragraphs', $num_paragraphs)
	->with('paragraphs', $paragraphs);
});

Route::get('/', function()
{
	return View::make('home');
});
