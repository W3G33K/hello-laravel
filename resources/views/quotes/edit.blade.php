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
				<textarea id="quote" name="quote">{{ old('quote', $data->quote) }}</textarea>
				@error('quote')
					<p>{{ $errors->first('quote') }}</p>
				@enderror
			</div>
		</div>

		<div>
			<label for="actor">Actor</label>
			<div>
				<input type="text" id="actor" name="actor" value="{{ old('actor', $data->actor) }}"/>
				@error('actor')
					<p>{{ $errors->first('actor') }}</p>
				@enderror
			</div>
		</div>

		<div>
			<label for="game">Video Game</label>
			<div>
				<input type="text" id="game" name="game" value="{{ old('game', $data->game) }}"/>
				@error('game')
					<p>{{ $errors->first('game') }}</p>
				@enderror
			</div>
		</div>

		<div>
			<div>
				<button type="submit">Update</button>
			</div>
		</div>
	</form>
@endsection
