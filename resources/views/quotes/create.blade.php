@extends('layouts.app')

@section('title', 'New Quote')

@section('header')
	<nav>
		<a href="/quotes" title="Back to Most Recent Quotes" class="back-arrow">Back</a>
	</nav>

	<h1>@yield('title')</h1>
@endsection

@section('content')
	<form action="/quotes" method="POST">
		@csrf

		<div>
			<label for="quote">Quote</label>
			<div>
				<textarea id="quote" name="quote"></textarea>
			</div>
		</div>

		<div>
			<label for="actor">Actor</label>
			<div>
				<input type="text" id="actor" name="actor"/>
			</div>
		</div>

		<div>
			<label for="game">Video Game</label>
			<div>
				<input type="text" id="game" name="game"/>
			</div>
		</div>

		<div>
			<div>
				<button type="submit">Create</button>
			</div>
		</div>
	</form>
@endsection
