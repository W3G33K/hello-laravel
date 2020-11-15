@extends('layouts.app')

@section('title', unslug($quote->slug))

@section('header')
	<nav>
		<a href="{{ route('quotes.all') }}" title="Back to Most Recent Quotes" class="back-arrow">Back</a>
	</nav>

	<h1>{{ unslug($quote->slug) }}</h1>
@endsection

@section('content')
	<figure class="quote">
		<blockquote>
			<q>{{ $quote->quote }}</q>
		</blockquote>
		<figcaption>
			<p>
				{{ $quote->actor }}, <cite>{{ $quote->game }}</cite>
			</p>
			<p class="permalink">
				<a href="{{ route('quotes.edit', $quote) }}" title="{{ $quote->slug }}">
					Edit Quote
				</a>
			</p>
		</figcaption>
	</figure>
@endsection
