@extends('layouts.app')

@section('title', unslug($data->slug))

@section('header')
	<nav>
		<a href="/quotes" title="Back to Most Recent Quotes" class="back-arrow">Back</a>
	</nav>

	<h1>{{ unslug($data->slug) }}</h1>
@endsection

@section('content')
	<figure class="quote">
		<blockquote>
			<q>{{ $data->quote }}</q>
		</blockquote>
		<figcaption>
			<p>
				{{ $data->actor }}, <cite>{{ $data->game }}</cite>
			</p>
			<p class="permalink">
				<a href="/quotes/{{ $data->slug }}/edit" title="{{ $data->slug }}">
					Edit Quote
				</a>
			</p>
		</figcaption>
	</figure>
@endsection
