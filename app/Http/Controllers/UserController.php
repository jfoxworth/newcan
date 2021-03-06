<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;



class UserController extends Controller
{
	//


	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'firstname' => 'required|string|max:255',
			'lastname' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'phone' => 'required|string|min:10',
			'address' => 'required|string|max:255',
			'state' => 'required|string|max:255',
			'zipcode' => 'required|string|min:5|max:10'
		]);
	}








	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return \App\User
	 */
	public function addme()
	{

		$regData = array (
			"firstname"  => Input::get('register-form-firstname'),
			"lastname" => Input::get('register-form-lastname'),
			"email"   => Input::get('register-form-email'),
			"phone"   => Input::get('register-form-phone'),
			"address"   => Input::get('register-form-address'),
			"zipcode"   => Input::get('register-form-zipcode'),
			"state"   => Input::get('register-form-state'),
			"phonebank"   => Input::get('register-form-phonebank'),
			"blockwalk"   => Input::get('register-form-blockwalk'),
			"othertask"   => Input::get('register-form-othertask')
		);

		$messages = [
		    'required' => 'The :attribute field is required.',
		    'max' => 'The :attribute field was too long',
		    'min' => 'The :attribute field was not long enough',
		    'unique' => 'That :attribute already exists',
		];


		Validator::make($regData, [
			'firstname' => 'required|string|max:255',
			'lastname' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'phone' => 'required|string|min:10',
			'address' => 'required|string|max:255',
			'state' => 'required|string|max:255',
			'zipcode' => 'required|string|min:5|max:10'
		], $messages)->validate();


		$thisUser = new User;
		$thisUser->firstname = Input::get('register-form-firstname');
		$thisUser->lastname = Input::get('register-form-lastname');
		$thisUser->email = Input::get('register-form-email');
		$thisUser->password = 'password';
		$thisUser->zipcode = Input::get('register-form-zipcode');
		$thisUser->phone = Input::get('register-form-phone');
		$thisUser->state = Input::get('register-form-state');
		$thisUser->address = Input::get('register-form-address');
		$thisUser->userinfo = '{}';
		$thisUser->phonebank = Input::get('register-form-phonebank');
		$thisUser->blockwalk = Input::get('register-form-blockwalk');
		$thisUser->other = Input::get('register-form-othertask');
		$thisUser->verified = 0;
		$thisUser->fraud = 0;
		$thisUser->save();


		return redirect('/signupComplete');
	}


}
