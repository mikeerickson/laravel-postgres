<?php

// ------------------------------------------------------------
// Event Listeners
// ------------------------------------------------------------

User::creating(function($user)
{
	$user->api_key = User::createApiKey();
});

// clean up our data (get rid of pesky spaces -- uses stripSpaces function below)
Customer::saving(function($customer){
	$customer->customer_name = ucwords(stripSpaces($customer->customer_name));
	$customer->address = ucwords(stripSpaces($customer->address));
	$customer->city = ucwords(stripSpaces($customer->city));
	$customer->state = strtoupper(stripSpaces($customer->state));
	$customer->county = ucwords(stripSpaces($customer->county));
});

function stripSpaces($str) {
	return trim(preg_replace('/\s+/',' ', $str));
}