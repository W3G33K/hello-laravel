<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class QuotesController extends Controller {
	public function show(string $slug): View {
		$posts = [
			'my-first-post' => [
				'quote' => 'It’s dangerous to go alone, take this!',
				'actor' => 'Old Man',
				'game' => 'The Legend of Zelda'
			],

			'my-second-post' => [
				'quote' => 'War. War never changes.',
				'actor' => 'Narrator',
				'game' => 'Fallout'
			],

			'my-third-post' => [
				'quote' => 'Thank you Mario! But our Princess is in another castle!',
				'actor' => 'Toad',
				'game' => 'Super Mario Bros.'
			],

			'secret-post' => [
				'quote' => 'I used to be an adventurer like you, until I took an arrow to the knee.',
				'actor' => 'Town Guard',
				'game' => 'Elder Scrolls V: Skyrim'
			]
		];

		if (!array_key_exists($slug, $posts)) {
			abort(404, 'Sorry, that quote was not found.');
		}

		return view('quotes.quote', [
			'post' => $posts[$slug]
		]);
	}
}
