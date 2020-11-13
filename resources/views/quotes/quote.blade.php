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
		<title>VGQ :: {{ $unslug(request()->route('slug')) }}</title>
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

			.quote figcaption:before {
				content: "\2014";
				margin-right: 8px;
			}
		</style>
	</head>

	<body>
		<main>
			<header>
				<h1>{{ $unslug(request()->route('slug')) }}</h1>
			</header>

			<figure class="quote">
				<blockquote>
					<q>{{ $post['quote'] }}</q>
				</blockquote>
				<figcaption>
					{{ $post['actor'] }}, <cite>{{ $post['game'] }}</cite>
				</figcaption>
			</figure>
		</main>

		<footer>
			<p>This page took {{ $render_time() }} seconds to render.</p>
		</footer>
	</body>
</html>
