<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Contracts\View\View;

class QuotesController extends Controller {
	public function show(string $slug): View {
		$data = Quote::query()
					 ->where('slug', $slug)
					 ->firstOrFail();
		return view('quotes.quote', compact('data'));
	}
}
