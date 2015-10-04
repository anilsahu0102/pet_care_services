@extends('layout.master')
@section('title')
	Pet Care Services | Service Offered
@stop

{{-- Content --}}
@section('content')
	<h3>List of services and the pet types</h3>
	<hr class="hr-blue">
	<br/>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="filter-false"><b>Service Offered</b></th>
					<th class="filter-false"><b>Pet Type</b></th>
				</tr>
			</thead>
			<tfoot>
				<th colspan="10" class="ts-pager form-horizontal">
					<button type="button" class="btn first"><i class="icon-step-backward glyphicon glyphicon-step-backward"></i></button>
					<button type="button" class="btn prev"><i class="icon-arrow-left glyphicon glyphicon-backward"></i></button>
					<span class="pagedisplay"></span> <!-- this can be any element, including an input -->
					<button type="button" class="btn next"><i class="icon-arrow-right glyphicon glyphicon-forward"></i></button>
					<button type="button" class="btn last"><i class="icon-step-forward glyphicon glyphicon-step-forward"></i></button>
					<select class="pagesize input-mini" title="Select page size">
						<option selected="selected" value="25">25</option>
						<option value="50">50</option>
						<option value="100">100</option>
						<option value="200">200</option>
						<option value="500">500</option>
						<option value="1000">1000</option>
					</select>
					<select class="pagenum input-mini" title="Select page number"></select>
				</th>
			</tfoot>
			<tbody>
				@if(count($a_service_offered) > 0)
					@foreach($a_service_offered as $row)
						@if($row->pet_type_ids != '')
							<tr>
								<td>{{ $row->service_name }}</td>
								<td>
									<ul>
									<?php
										$a_pet_id = explode(",", $row->pet_type_ids);
										//echo "<pre>"; print_r($a_pet_id); die;
										$pet_name = '';
										foreach ($a_pet_id as $key => $value) {
											$pet_name = PetTypes::where('id', '=', $value)->pluck('pet_name');
									?>
											<li>{{ $pet_name }}</li>
									<?php
										}
									?>
									</ul>
								</td>
							</tr>
						@endif
					@endforeach
				@else
					<tr>
						<td colspan="2">No List</td>
					</tr>
				@endif
			</tbody>
		</table>
	</div>
@stop