<?php
class MasterController extends BaseController {

	/*
	* Function to show the service type list
	*/
	public function serviceTypeList()
	{
		$service_types = ServiceTypes::all();
		//echo "<pre>"; print_r($service_types); die;
		return View::make('service_type.list')
			->with('a_service_types', $service_types);
	}


	/*
	* Function to show the add service type
	*/
	public function serviceTypeAdd()
	{
		// show the form
		return View::make('service_type.add');
	}


	/*
	* Function to save the service type data
	*/
	public function serviceTypeSave()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'txt-service-type' => 'required',
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			$messages = $validator->messages();
			return Redirect::to('service_type/add')
				->with('flash_error', $messages->first())
				->withInput();
		} else {
			$service_type = new ServiceTypes;
			$service_type->name = Input::get('txt-service-type');
			$service_type->save();
			// validation not successful, send back to form 
			return Redirect::to('service_type/list')
				->with('flash_success', 'Service type successfully added.');
		}
	}


	/*
	* Function to soft delete the service type data via id
	*/
	public function serviceTypeDelete($id)
	{
		$service_type = ServiceTypes::find($id);
		$service_type->delete();
		return Redirect::to('service_type/list')
			->with('flash_success', 'Service type successfully deleted.');
	}


	/*
	* Function to show the pet type list
	*/
	public function petTypeList()
	{
		$pet_types = PetTypes::all();
		//echo "<pre>"; print_r($pet_types); die;
		return View::make('pet_type.list')
			->with('a_pet_types', $pet_types);
	}


	/*
	* Function to show the add pet type
	*/
	public function petTypeAdd()
	{
		// show the form
		return View::make('pet_type.add');
	}


	/*
	* Function to save the pet type data
	*/
	public function petTypeSave()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'txt-pet-type' => 'required',
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			$messages = $validator->messages();
			return Redirect::to('pet_type/add')
				->with('flash_error', $messages->first())
				->withInput();
		} else {
			$pet_type = new PetTypes;
			$pet_type->pet_name = Input::get('txt-pet-type');
			$pet_type->save();
			// validation not successful, send back to form 
			return Redirect::to('pet_type/list')
				->with('flash_success', 'Pet type successfully added.');
		}
	}


	/*
	* Function to soft delete the pet type data via id
	*/
	public function petTypeDelete($id)
	{
		$pet_type = PetTypes::find($id);
		$pet_type->delete();
		return Redirect::to('pet_type/list')
			->with('flash_success', 'Pet type successfully deleted.');
	}


	/*
	* Function to show the allocate the service types
	*/
	public function allocateServiceList()
	{
		$pet_types = PetTypes::lists('pet_name', 'id');
		$allocate_services = ServiceTypes::leftJoin('allocate_services', 'allocate_services.service_type_id', '=', 'service_types.id')
			->select(
				'service_types.id as service_id',
				'service_types.name as service_name',
				'allocate_services.*'
			)
			->orderBy('service_name', 'ASC')
			->get();

		return View::make('allocate_service')
			->with('a_allocate_services', $allocate_services)
			->with('a_pet_types', $pet_types);
	}


	/*
	* Function to save the allocate the service types to pet types
	*/
	public function allocateServiceSave()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			//'slt-pet-types-1' => 'required|array|min:1',
		);
		$i = 1;
		$count = PetTypes::all()->count();
		
		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			$messages = $validator->messages();
			return Redirect::to('allocate_service/list')
				->with('flash_error', $messages->first());
		} else {
			for ($i=1; $i <= $count; $i++) { 
				$i_allocate_id     = Input::get('hdn-allocate-id-'.$i);
				$i_service_type_id = Input::get('hdn-service-type-'.$i);
				$a_pet_types       = Input::get('slt-pet-types-'.$i);
				//echo "<pre>"; print_r($a_pet_types); die;
				if(is_array($a_pet_types)){
					$s_pet_types_ids   = implode(",", $a_pet_types);

					if($i_allocate_id == 0){
						$allocate_service = new AllocateServices;
					} else {
						$allocate_service = AllocateServices::find($i_allocate_id);
					}
					$allocate_service->service_type_id = $i_service_type_id;
					$allocate_service->pet_type_ids    = $s_pet_types_ids;
					$allocate_service->save();
				}
			}
			// validation not successful, send back to form 
			return Redirect::to('allocate_service/list')
				->with('flash_success', 'Allocate services successfully saved.');
		}
	}


	/*
	* Function to show the list service offered
	*/
	public function serviceOffered()
	{
		$service_offered = ServiceTypes::leftJoin('allocate_services', 'allocate_services.service_type_id', '=', 'service_types.id')
			->select(
				'service_types.id as service_id',
				'service_types.name as service_name',
				'allocate_services.*'
			)
			->orderBy('service_name', 'ASC')
			->get();

		return View::make('service_offered')
			->with('a_service_offered', $service_offered);
	}


	/*
	* Function to show the list service available
	*/
	public function serviceAvailable()
	{
		$a_service_available = array();
		$service_available   = ServiceTypes::leftJoin('allocate_services', 'allocate_services.service_type_id', '=', 'service_types.id')
			->select(
				'service_types.id as service_id',
				'service_types.name as service_name',
				'allocate_services.*'
			)
			->orderBy('service_name', 'ASC')
			->get();

		$pet_types = PetTypes::orderBy('pet_name', 'ASC')->get();
		foreach($pet_types as $row){
			$a_service_name = array();
			foreach($service_available as $sub_row){
				$a_pet_id = explode(",", $sub_row->pet_type_ids);
				if($sub_row->pet_type_ids != '' && in_array($row->id, $a_pet_id)){
					$a_service_name[] = $sub_row->service_name;
				}
			}
			$a_service_available[$row->pet_name] = $a_service_name;
		}
		//echo "<pre>"; print_r($a_service_available); die;
		return View::make('service_available')
			->with('a_service_available', $a_service_available);
	}
}