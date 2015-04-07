<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'username' => 'required|unique:users|max:30',
			'email' => 'required|email|max:45|unique:users',
			'password' => 'required|confirmed|min:6|max:25',
			'firstname' => 'required|max:30',
			'lastname' => 'required|max:30',
			'middlename' => 'required|max:30',
			'dateofbirth' => 'required',
			'gender' => 'required',
			'user_types_id' => 'required',
			'locations_id' => 'required',
			'mobilenumber' => 'required|unique:users|max:11',
		];
	}

}
