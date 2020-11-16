@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Dashboard') }}</div>
					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif

						{{ __('You are logged in!') }}


						<nav>
							<ol>
								<li>
									<a href="{{ route('quotes.create') }}" title="Create A New Quote" class="forward-arrow">
										{{ __('Create A New Quote') }}
									</a>
								</li>
								<li>
									<a href="{{ route('quotes.all') }}" title="View Most Recent Quotes" class="forward-arrow">
										{{ __('Most Recent Quotes') }}
									</a>
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
