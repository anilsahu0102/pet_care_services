<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class ServiceTypes extends Eloquent {

	use SoftDeletingTrait;
	protected $table      = 'service_types';
	protected $dates      = ['deleted_at'];
	protected $softDelete = true; 
}
