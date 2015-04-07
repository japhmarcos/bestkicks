<?php namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Http\Controllers\Controller;
use Validator;
use Request;
use App\Location;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Input;

class RegisterController extends Controller {

	/**
	 * Require users to login to access pages.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$locations = Location::all();

		return view('bestkicks.register')->with('locations', $locations);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(RegisterUserRequest $request)
	{
		User::create([
			'username' => $request['username'],
			'email' => $request['email'],
			'password' => bcrypt($request['password']),
			'firstname' => $request['firstname'],
			'middlename' => $request['middlename'],
			'lastname' => $request['lastname'],
			'dateofbirth' => $request['dateofbirth'],
			'gender' => $request['gender'],
			'user_types_id' => $request['user_types_id'],
			'user_statuses_id' => $request['user_statuses_id'],
			'locations_id' => $request['locations_id'],
			'mobilenumber' => $request['mobilenumber'],
			'display_photo' => 'default_user.jpg',
			'landline' => Input::get('landline'),
			'valid_id' => 'default_validid.png'
		]);


		return redirect('auth/login');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
