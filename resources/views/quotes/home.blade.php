<!DOCTYPE html>

<?php
/** @imports */
use \Illuminate\Support\Str;
?>

<?php
/** @helpers */
$render_time = fn() => round((microtime(true) - LARAVEL_START), 3);
$unslug = fn($slug) => Str::of($slug)->slug(' ')->title();
?>

<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<title>VGQ :: Most Recent Video Game Quotes</title>
		<style type="text/css">
			body {
				font: 1.8rem/1.4 Georgia, serif;
				margin: 1em;
			}

			.quote {
				background: #eee;
				border-radius: 1em;
				margin: 0;
				padding: 1em;
			}

			.quote figcaption,
			.quote blockquote {
				margin: 1em;
			}

			.quote figcaption p:first-child:before {
				content: "\2014";
				margin-right: 8px;
			}

			.quote figcaption p:last-child {
				font-size: 1rem;
				text-align: right;
			}

			.quote figcaption p:last-child a:before {
				content: "\00BB";
			}
		</style>
	</head>

	<body>
		<main>
			<header>
				<h1>Most Recent Quotes</h1>
			</header>

			@if(isset($data) && count($data) > 0)
				@foreach($data as $q)
					<figure class="quote">
						<blockquote>
							<q>{{ $q->quote }}</q>
						</blockquote>
						<figcaption>
							<p>{{ $q->actor }}, <cite>{{ $q->game }}</cite></p>
							<p>
								<a href="/quotes/{{ $q->slug }}" title="{{ $q->slug }}">
									Permalink
								</a>
							</p>
						</figcaption>
					</figure>
				@endforeach
			@endif
		</main>

		<footer>
			<p>This page took {{ $render_time() }} seconds to render.</p>
		</footer>
	</body>
</html>
