<?php

	namespace App\Http\Controllers;

	use App\Models\Quote;
	use Illuminate\Contracts\View\View;
	use Illuminate\Http\RedirectResponse;
	use Illuminate\Support\Str;

	class QuotesController extends Controller {
		public function create(): View {
			return view('quotes.create');
		}

		public function edit(string $slug): View {
			$data = Quote::query()
						 ->where('slug', $slug)
						 ->firstOrFail();
			return view('quotes.edit', compact('data'));
		}

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

		public function store(): RedirectResponse {
			request()->validate([
				'quote' => 'required',
				'actor' => 'required',
				'game' => 'required',
			]);

			$qbody = request('quote');
			$actor = request('actor');
			$game = request('game');
			$millis = (int) microtime(true);
			$slug = Str::slug("$actor $game $millis");

			$quote = new Quote();
			$quote->slug = $slug;
			$quote->quote = $qbody;
			$quote->actor = $actor;
			$quote->game = $game;
			$quote->save();

			return redirect('/quotes');
		}

		public function update(string $slug): RedirectResponse {
			request()->validate([
				'quote' => 'required',
				'actor' => 'required',
				'game' => 'required',
			]);

			$quote = Quote::query()
						  ->where('slug', $slug)
						  ->firstOrFail();
			$quote->quote = request('quote');
			$quote->actor = request('actor');
			$quote->game = request('game');
			$quote->save();
			return redirect("/quotes/$slug");
		}
	}
