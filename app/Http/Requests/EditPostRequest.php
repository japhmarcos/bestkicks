<?php namespace App\Http\Requests;

use App\Http\Requests\FormRequest;

class EditPostRequest extends Request {

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
			'brands_id' 	=> 'required',
			'sizes_id' 		=> 'required',
			'conditions_id' => 'required',
			'colors_id' 	=> 'required',
			'shoe_types_id' => 'required',
			'locations_id' 	=> 'required',
			'price' 		=> 'required',
			'description' 	=> 'required',
			'frontview'		=> 'required',
			'backview'		=> 'required',
			'soleview'		=> 'required',
			'rightview'		=> 'required',
			'leftview'		=> 'required',
			'topview'		=> 'required',
		];
	}

}
