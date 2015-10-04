<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// route to show the login form
Route::get('/', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

// route to logout
Route::get('logout', array('uses' => 'HomeController@doLogout'));


Route::group(array('before' => array('auth')), function(){
	
	/******** Service Type Route *******/

	// route to show the list of service types
	Route::get('service_type/list', array('uses' => 'MasterController@serviceTypeList', 'as' => 'service_type.list'));

	// route to add the service types
	Route::any('service_type/add', array('uses' => 'MasterController@serviceTypeAdd', 'as' => 'service_type.add'));

	// route to store the service types
	Route::any('service_type/save', array('uses' => 'MasterController@serviceTypeSave', 'as' => 'service_type.save'));

	// route to delete the service types
	Route::any('service_type/delete/{id}', array('uses' => 'MasterController@serviceTypeDelete', 'as' => 'service_type.delete'));


	/******** Pet Type Route *******/

	// route to show the list of pet types
	Route::get('pet_type/list', array('uses' => 'MasterController@petTypeList', 'as' => 'pet_type.list'));

	// route to add the pet types
	Route::any('pet_type/add', array('uses' => 'MasterController@petTypeAdd', 'as' => 'pet_type.add'));

	// route to store the pet types
	Route::any('pet_type/save', array('uses' => 'MasterController@petTypeSave', 'as' => 'pet_type.save'));

	// route to delete the pet types
	Route::any('pet_type/delete/{id}', array('uses' => 'MasterController@petTypeDelete', 'as' => 'pet_type.delete'));



	/******** Allocate a service Route *******/

	// route to show the list of service and pet types
	Route::get('allocate_service/list', array('uses' => 'MasterController@allocateServiceList', 'as' => 'allocate_service.list'));

	// route to allocate a service to one or more pet types
	Route::any('allocate_service/save', array('uses' => 'MasterController@allocateServiceSave', 'as' => 'allocate_service.save'));


	/******** Service Offered/Available *******/

	// route to show the list of service offered
	Route::get('service_offered', array('uses' => 'MasterController@serviceOffered', 'as' => 'service_offered'));

	// route to allocate a service to available 
	Route::any('service_available', array('uses' => 'MasterController@serviceAvailable', 'as' => 'service_available'));
});






