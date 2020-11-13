<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class QuotesController extends Controller {
	public function show(string $slug): View {
		$data = DB::table('quotes')
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
