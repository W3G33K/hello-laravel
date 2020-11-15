@extends('layouts.app')

@section('title', 'Update Quote')

@section('header')
	<nav>
		<a href="/quotes/{{ $data->slug }}" title="Back to Quote" class="back-arrow">Back</a>
	</nav>

	<h1>@yield('title')</h1>
@endsection

@section('content')
	<form action="/quotes/{{ $data->slug }}" method="POST">
		@csrf
		@method('PUT')

		<div>
			<label for="quote">Quote</label>
			<div>
				<textarea id="quote" name="quote">{{ $data->quote }}</textarea>
			</div>
		</div>

		<div>
			<label for="actor">Actor</label>
			<div>
				<input type="text" id="actor" name="actor" value="{{ $data->actor }}"/>
			</div>
		</div>

		<div>
			<label for="game">Video Game</label>
			<div>
				<input type="text" id="game" name="game" value="{{ $data->game }}"/>
			</div>
		</div>

		<div>
			<div>
				<button type="submit">Update</button>
			</div>
		</div>
	</form>
@endsection
