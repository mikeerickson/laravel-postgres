<?php

class CustomersAPIController extends BaseController {

	/**
	 * Returns all rows.
	 * method: GET /
	 *
	 */
	public function index()
	{
		return Customer::all();
	}

	/**
	 * Method Not Supported
	 *
	 * @return 500
	 */
	public function create()
	{
        return Response::make(null, 500);
	}

	/**
	 * Creates new resource
	 * method: POST / data
	 *
	 * @return 500 on error, new resource on success
	 */
	public function store()
	{
		$customer = new Customer(Input::get());
		if(!$customer->save()) {
			Response::make(500,'Customer was not saved');
		}
		return $customer;
	}

	/**
	 * Returns resource for given index
	 * method: GET/:id
	 *
	 * @param  int  $id
	 * @returns 404 if not found, returns resource on success
	 */
	public function show($id)
	{
		$customer = Customer::find($id);
		if(!$customer) {
			App::abort(404,'Customer Record Not Found');
		}
        return Customer::find($id);
	}

	/**
	 * Returns resource for given index (same as as normal GET)
	 * method: GET/:id
	 *
	 * @param  int  $id
	 * @returns 404 if not found, returns resource on success
	 */
	public function edit($id)
	{
		$customer = Customer::find($id);
		if(!$customer) {
			App::abort(404,'Customer Record Not Found');
        }
        return Customer::find($id);
	}

	/**
	 * Update the specified resource in storage.
	 * method: PUT/:id / data
	 *
	 * @param  int  $id
	 * @return 404 if not found, returns updated resource on success, returns 500 on error
	 */
	public function update($id)
	{
		$customer = Customer::find($id);
		if(!$customer) {
			return Response::make(null, 404);
		} else {
			$affectedRows = Customer::where('id', $id)->update(Input::get());
			if($affectedRows) {
				return Customer::find($id);
			} else
				Response::make(500,'An error occured saving customer');
		}

	}

	/**
	 * Remove the specified resource from storage.
	 * method: DELETE/:id
	 *
	 * @param  int  $id
	 * @return 200 on success, 404 if not found, 500 on error
	 */
	public function destroy($id)
	{
		$customer = Customer::find($id);
		if(!$customer) {
			App::abort(404,'Customer Record Not Found');
		} else {
			$customer->delete();
			return Response::make(null, 200);
		}
	}

}
