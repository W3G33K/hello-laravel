<?php

	use Illuminate\Support\Facades\Route;

	use App\Http\Controllers\QuotesController;

	/*
	|--------------------------------------------------------------------------
	| Web Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register web routes for your application. These
	| routes are loaded by the RouteServiceProvider within a group which
	| contains the "web" middleware group. Now create something great!
	|
	*/

	Route::get('/quotes', [QuotesController::class, 'index'])->name('quotes.all');
	Route::get('/quotes/create', [QuotesController::class, 'create'])->name('quotes.create');
	Route::get('/quotes/{quote}', [QuotesController::class, 'show'])->name('quotes.show');
	Route::get('/quotes/{quote}/edit', [QuotesController::class, 'edit'])->name('quotes.edit');
	Route::post('/quotes', [QuotesController::class, 'store'])->name('quotes.store');
	Route::put('/quotes/{quote}', [QuotesController::class, 'update'])->name('quotes.update');
