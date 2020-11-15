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

	Route::get('/quotes', [QuotesController::class, 'index']);
	Route::get('/quotes/create', [QuotesController::class, 'create']);
	Route::get('/quotes/{slug}', [QuotesController::class, 'show']);

	Route::post('/quotes', [QuotesController::class, 'store']);
