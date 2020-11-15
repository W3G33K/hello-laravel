@extends('layouts.app')

@section('title', 'Most Recent Quotes')

@section('header')
	<h1>@yield('title')</h1>
@endsection

@section('content')
	@if(isset($data) && count($data) > 0)
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
						<a href="/quotes/{{ $q->slug }}" title="{{ $q->slug }}">
							Permalink
						</a>
					</p>
				</figcaption>
			</figure>
		@endforeach
	@endif
@endsection
