<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class PetTypes extends Eloquent {

	use SoftDeletingTrait;
	protected $table      = 'pet_types';
	protected $dates      = ['deleted_at'];
	protected $softDelete = true; 
}