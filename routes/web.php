<?php

	use Illuminate\Support\Facades\Route;

	/*
	|--------------------------------------------------------------------------
	| Web Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register web routes for your application. These
	| routes are loaded by the RouteServiceProvider within a group which
	| contains the "web" middleware group. Now create something great!
	|
	*/

	Route::get('/quotes/{slug}', function($slug) {
		$quotes = [
			'my-first-post' => [
				'quote' => 'It’s dangerous to go alone, take this!',
				'author' => 'Old Man',
				'game' => 'The Legend of Zelda'
			],

			'my-second-post' => [
				'quote' => 'War. War never changes.',
				'author' => 'Narrator',
				'game' => 'Fallout'
			],

			'my-third-post' => [
				'quote' => 'Thank you Mario! But our Princess is in another castle!',
				'author' => 'Toad',
				'game' => 'Super Mario Bros.'
			],

			'secret-post' => [
				'quote' => 'I used to be an adventurer like you, until I took an arrow to the knee.',
				'author' => 'Town Guard',
				'game' => 'Elder Scrolls V: Skyrim'
			]
		];

		if (!array_key_exists($slug, $quotes)) {
			abort(404, 'Sorry, that quote was not found.');
		}

		return $quotes[$slug];
	});
