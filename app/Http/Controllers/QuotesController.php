<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Contracts\View\View;

class QuotesController extends Controller {
	public function show(string $slug): View {
		$data = Quote::query()
					 ->where('slug', $slug)
					 ->first();

		if (!$data) {
			abort(404, 'Sorry, that quote could not found.');
		}

		return view('quotes.quote', [
			'data' => $data
		]);
	}
}
