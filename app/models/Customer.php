<?php

class Customer extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		// 'id' => 'required',
		'customer_name' => 'required'
	);
	// public static $rules = array(
	// 	'id'           => 'required',
	// 	'customer_name' => 'required',
	// 	'address'       => 'required',
	// 	'city'          => 'required',
	// 	'state'         => 'required',
	// 	'zip'           => 'required',
	// 	'county'        => 'required'
	// );
}
