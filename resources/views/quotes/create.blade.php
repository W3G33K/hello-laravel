@extends('layouts.app')

@section('title', 'New Quote')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-8">
								@yield('title')
							</div>
							<div class="col-md-4">
								<nav class="text-right">
									@guest
										<a href="{{ route('quotes.all') }}" title="Back to Most Recent Quotes" class="back-arrow">Back</a>
									@else
										<a href="{{ route('home') }}" title="Back to Home" class="back-arrow">Home</a>
									@endguest
								</nav>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form action="{{ route('quotes.store') }}" method="POST">
							@csrf

							<div class="form-group row">
								<label for="quote" class="col-md-4 col-form-label text-md-right">{{ __('Quote') }}</label>
								<div class="col-md-6">
									<textarea id="quote" name="quote"
											class="form-control @error('quote') is-invalid @enderror"
											required autocomplete="quote" autofocus>{{ old('quote') }}</textarea>
									@error('quote')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="form-group row">
								<label for="actor" class="col-md-4 col-form-label text-md-right">{{ __('Actor') }}</label>
								<div class="col-md-6">
									<input type="text" id="actor" name="actor"
										   class="form-control @error('actor') is-invalid @enderror"
										   value="{{ old('actor') }}" required autocomplete="actor" autofocus>
									@error('actor')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="form-group row">
								<label for="game" class="col-md-4 col-form-label text-md-right">{{ __('Game') }}</label>
								<div class="col-md-6">
									<input type="text" id="game" name="game"
										   class="form-control @error('game') is-invalid @enderror"
										   value="{{ old('game') }}" required autocomplete="game" autofocus>
									@error('game')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary">
										{{ __('Create') }}
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
