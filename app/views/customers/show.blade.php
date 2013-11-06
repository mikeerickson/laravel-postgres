@extends('layouts.scaffold')

@section('main')

<h1>Show Customer</h1>

<p>
	{{ link_to_route('customers.index', 'All Customers') }} |
	{{ link_to_route('customers.create', 'New Customer') }}
</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>id</th>
				<th>Customer Name</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Zip</th>
				<th>County</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $customer->id }}}</td>
					<td>{{{ $customer->customer_name }}}</td>
					<td>{{{ $customer->address }}}</td>
					<td>{{{ $customer->city }}}</td>
					<td>{{{ $customer->state }}}</td>
					<td>{{{ $customer->zip }}}</td>
					<td>{{{ $customer->county }}}</td>
                    <td>{{ link_to_route('customers.edit', 'Edit', array($customer->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('customers.destroy', $customer->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
