<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<title>
			@hasSection('title')
				@yield('title')
				::
			@endif
			{{ config('app.name', 'VGQ') }}
		</title>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
	</head>

	<body>
		<main>
			<header>
				@yield('header')
			</header>

			<section id="content-container">
				@yield('content')
			</section>
		</main>

		<footer>
			<p>This page took {{ render_time() }} seconds to render.</p>
		</footer>
	</body>
</html>
