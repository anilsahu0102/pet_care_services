@extends('layout.master')

@section('title')
	Pet Care Services | Allocate Service Types
@stop

{{-- Content --}}
@section('content')
	<h3>Allocate Service Type to Pet Type</h3>
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
	{{ Form::open(array('route' => 'allocate_service.save','class' => 'form'))}}
		<div class="form-group">
			<?php $i = 1; ?>
			@foreach($a_allocate_services as $row)
				{{ Form::hidden('hdn-allocate-id-'.$i, isset($row->id) ? $row->id : 0)}}
				<div class="row">
					<div class="col-md-2 padding-top-15">
						{{ Form::label($row->service_name) }}
						{{ Form::hidden('hdn-service-type-'.$i, $row->service_id)}}
					</div>
					<div class="col-md-2 padding-top-15">
						<?php
							$a_selected = '';
							if(isset($row->pet_type_ids) && $row->pet_type_ids != ''){
								$a_selected = explode(",", $row->pet_type_ids);
							} 
							//echo "<pre>"; print_r($a_selected);
						?>
						{{ Form::select('slt-pet-types-'.$i.'[]', $a_pet_types, $a_selected, array('class'=>'form-control multiselect', 'multiple' => 'multiple')) }}	
					</div>
				</div>
				<?php $i++; ?>
			@endforeach
			<br/>
			<div class="form-group">
				{{ Form::submit('Save', array('class'=>'btn btn-primary')) }}
			</div>
		</div>
	{{ Form::close() }}
@stop