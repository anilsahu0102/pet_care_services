@extends('layout.master')
@section('title')
	Pet Care Services | Service Types
@stop

{{-- Content --}}
@section('content')
	<h3>Service Type List</h3>
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
	<div class="row">
		<div class="col-md-3">
			<a type="button" class="btn btn-primary" href="{{{ URL::to('service_type/add') }}}" title="Add Service Type">Add Service Type</a>
		</div>
	</div>
	<br/>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="filter-false"><b>Name</b></th>
					<th class="sorter-false filter-false text-center"><b>Action</b></th>
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
				@if(count($a_service_types) > 0)
					@foreach($a_service_types as $row)
						<tr>
							<td>{{ $row->name }}</td>
							<td class="text-center">
								<a id="delete"  class="btn btn-small control-link" href='#' data-toggle="modal" data-target=".delete-modal-{{$row->id}}" title="Remove">
									<span class="glyphicon glyphicon-remove"></span>
								</a>
							</td>
						</tr>
						<!-- Delete Modal-->
						<div class="modal fade delete-modal-{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" >
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="modal-title">Message</h4>
									</div>
									<div class="modal-body">
										<p>Are you sure to delete the service type?</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
										<a  class="btn btn-primary" href="{{ URL::to('service_type/delete/' . $row->id) }}" >Yes</a>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				@else
					<tr>
						<td colspan="2">No Service Types</td>
					</tr>
				@endif
			</tbody>
		</table>
	</div>
@stop