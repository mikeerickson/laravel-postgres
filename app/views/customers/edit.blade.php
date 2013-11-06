@extends('layouts.scaffold')

@section('main')

<h1>Edit Customer</h1>
{{ Form::model($customer, array('method' => 'PATCH', 'route' => array('customers.update', $customer->id))) }}
	<ul>
        <li>
            {{ Form::label('id', 'id:') }}
            {{ Form::input('text', 'id', null, array('disabled' => 'true') ) }}
        </li>

        <li>
            {{ Form::label('customer_name', 'Customer Name:') }}
            {{ Form::text('customer_name') }}
        </li>

        <li>
            {{ Form::label('address', 'Address:') }}
            {{ Form::text('address') }}
        </li>

        <li>
            {{ Form::label('city', 'City:') }}
            {{ Form::text('city') }}
        </li>

        <li>
            {{ Form::label('state', 'State:') }}
            {{ Form::text('state') }}
        </li>

        <li>
            {{ Form::label('zip', 'Zip:') }}
            {{ Form::text('zip') }}
        </li>

        <li>
            {{ Form::label('county', 'County:') }}
            {{ Form::text('county') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('customers.show', 'Cancel', $customer->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
