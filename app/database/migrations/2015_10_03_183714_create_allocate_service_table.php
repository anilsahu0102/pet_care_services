<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllocateServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('allocate_services', function(Blueprint $table)
		{
			$table->increments('id');

			$table->unsignedInteger('service_type_id');
			$table->string('pet_type_ids', 255);
			$table->timestamps();
		});

		Schema::table('allocate_services', function($table) {
		    $table->foreign('service_type_id')->references('id')->on('service_types')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('allocate_services');
	}

}
