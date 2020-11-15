<?php

	namespace App\Http\Controllers;

	use App\Models\Quote;
	use Illuminate\Contracts\View\View;

	class QuotesController extends Controller {
		public function index(): View {
			$data = Quote::query()
						 ->latest()
						 ->take(10)
						 ->get();
			return view('quotes.index', compact('data'));
		}

		public function show(string $slug): View {
			$data = Quote::query()
						 ->where('slug', $slug)
						 ->firstOrFail();
			return view('quotes.quote', compact('data'));
		}
	}
