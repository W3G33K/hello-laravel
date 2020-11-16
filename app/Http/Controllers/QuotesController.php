<?php

	namespace App\Http\Controllers;

	use App\Models\Quote;
	use Illuminate\Contracts\View\View;
	use Illuminate\Http\RedirectResponse;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Str;

	class QuotesController extends Controller {
		public function create(): View {
			return view('quotes.create');
		}

		public function edit(Quote $quote): View {
			return view('quotes.edit', compact('quote'));
		}

		public function index(): View {
			$data = Quote::query()
						 ->latest()
						 ->take(10)
						 ->get();
			return view('quotes.index', compact('data'));
		}

		public function show(Quote $quote): View {
			return view('quotes.quote', compact('quote'));
		}

		public function store(Request $request): RedirectResponse {
			$quote = new Quote($this->validator($request));
			if (Auth::check()) {
				$quote->user_id = Auth::id();
			}

			$quote->slug = $this->slugify($quote->actor, $quote->game);
			$quote->save();

			return redirect(route('quotes.all'));
		}

		public function update(Request $request, Quote $quote): RedirectResponse {
			$quote->update($this->validator($request));
			return redirect(
				$quote->path()
			);
		}

		private function slugify(string... $strings): string {
			$millis = (int) microtime(true);
			$string = implode(" ", $strings);
			return Str::slug("$string $millis");
		}

		private function validator(Request $request): array {
			return $request->validate([
				'quote' => 'required',
				'actor' => 'required',
				'game' => 'required',
			]);
		}
	}
