<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}


	public function showLogin()
	{
		// show the form
		return View::make('login');
	}

	public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'txt-user-name' => 'required',
			'txt-password'  => 'required|alphaNum|min:5' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			$messages = $validator->messages();
			return Redirect::to('/')
				->with('flash_error', $messages->first())
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'username' => Input::get('txt-user-name'),
				'password' => Input::get('txt-password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				return Redirect::to('service_type/list');

			} else {        

				// validation not successful, send back to form 
				return Redirect::to('/')
					->with('flash_error', 'The username and password is incorrect!');
			}
		}
	}

	public function doLogout()
	{
	    Auth::logout(); 
	    return Redirect::to('/'); // redirect the user to the login screen
	}
}
