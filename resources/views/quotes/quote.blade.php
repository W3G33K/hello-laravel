@extends('layouts.app')

@section('title', unslug($data->slug))

@section('header')
	<nav>
		<a href="/quotes" title="Back to Most Recent Quotes">Back</a>
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
		</figcaption>
	</figure>
@endsection
