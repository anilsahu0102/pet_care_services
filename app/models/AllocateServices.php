<?php

class AllocateServices extends Eloquent {

	protected $table      = 'allocate_services';
	protected $dates      = ['deleted_at'];
	protected $softDelete = true; 
}