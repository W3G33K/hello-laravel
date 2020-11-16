@extends('layouts.app')

@section('title', unslug($quote->slug))

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-8">
								<a href="#">{{ $quote->actor }}</a>
							</div>
							<div class="col-md-4">
								<nav class="text-right">
									<a href="{{ route('quotes.all') }}" title="Back to Most Recent Quotes" class="back-arrow">Back</a>
								</nav>
							</div>
						</div>
					</div>
					<div class="card-body">
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
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
