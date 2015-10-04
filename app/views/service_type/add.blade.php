@extends('layout.master')

@section('title')
	Pet Care Services | Service Types
@stop

{{-- Content --}}
@section('content')
	<h3>Add Service Type</h3>
	<hr class="hr-blue">
	@if (Session::has('flash_error'))
		<div class="alert alert-warning">
			<a class="close" href="#" data-dismiss="alert" aria-hidden="true">&times;</a>
			{{ Session::get('flash_error') }}
		</div>
	@endif
	@if (Session::has('flash_success'))
		<div class="alert alert-success">
			<a class="close" href="#" data-dismiss="alert" aria-hidden="true">&times;</a>
			{{ Session::get('flash_success') }}
		</div>
	@endif
	<br/>
	{{ Form::open(array('route' => 'service_type.save','class' => 'form'))}}
		<div class="form-group">
			<div class="row">
				<div class="col-md-4">
					{{ Form::label('Service Type Name') }}
					{{ Form::text('txt-service-type', null, array('class'=>'form-control', 'placeholder'=>'Service Type Name')) }}	
				</div>
			</div>
			<br/>
			<div class="form-group">
				{{ Form::submit('Add', array('class'=>'btn btn-primary')) }}
			</div>
		</div>
	{{ Form::close() }}
@stop