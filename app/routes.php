<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// allow CORS
App::after(function($request, $response) {
	$response->headers->set('Access-Control-Allow-Origin', '*');
});

// routes for API access
Route::group(array('prefix' => 'api/v1', 'before' => 'api.auth|api.limit'), function() {
	Route::resource('customers', 'CustomersAPIController');
});

// Route for browser access
Route::get('/', function() {
	return Redirect::to('/customers');	// redirect root to customers
});

Route::resource('customers', 'CustomersController');