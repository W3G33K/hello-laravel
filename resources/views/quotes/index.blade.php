@extends('layouts.app')

@section('title', 'Most Recent Quotes')

@section('header')
	<nav>
		<a href="{{ route('quotes.create') }}" title="Create A New Quote">Create A New Quote</a>
	</nav>

	<h1>@yield('title')</h1>
@endsection

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				@forelse($data as $q)
					<div class="card">
						<div class="card-header">
							<a href="#">{{ $q->actor }}</a>
						</div>
						<div class="card-body">
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
						</div>
					</div>
				@empty
					<h2>No quotes for you!</h2>
				@endforelse
			</div>
		</div>
	</div>
@endsection
