@extends('layouts.app')

@section('title', 'Most Recent Quotes')

@section('header')
	<nav>
		<a href="{{ route('quotes.create') }}" title="Create A New Quote">Create A New Quote</a>
	</nav>

	<h1>@yield('title')</h1>
@endsection

@section('content')
	@if ($data->isEmpty())
		<h2>No quotes for you!</h2>
	@else
		@foreach($data as $q)
			<figure class="quote">
				<blockquote>
					<q>{{ $q->quote }}</q>
				</blockquote>
				<figcaption>
					<p>
						{{ $q->actor }}, <cite>{{ $q->game }}</cite>
					</p>
					<p class="permalink">
						<a href="{{ $q->path() }}" title="{{ $q->slug }}">
							Permalink
						</a>
					</p>
				</figcaption>
			</figure>
		@endforeach
	@endif
@endsection
