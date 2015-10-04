@extends('layout.master')
@section('title')
	Pet Care Services | Service Available
@stop

{{-- Content --}}
@section('content')
	<h3>List of pets and the services available</h3>
	<hr class="hr-blue">
	<br/>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="filter-false"><b>Pet Type</b></th>
					<th class="filter-false"><b>Service Available</b></th>
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
				@if(count($a_service_available) > 0)
					@foreach($a_service_available as $key => $a_value)
						<tr>
							@if(count($a_value) != 0)
								<td>{{ $key }}</td>
								<td>
									<ul>
									@foreach($a_value as $value)
										<li>{{ $value }}</li>
									@endforeach
									</ul>
								</td>
							@endif
						</tr>
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