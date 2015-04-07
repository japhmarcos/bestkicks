<?php namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Request;
Use App\Color;
use View;
use Redirect;

class ColorController extends Controller {

	/**
	 * Require users to login to access pages.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$color = Color::all();
		$title = 'Manage Colors';
		return view('color.index', compact('color','title'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$title = 'Color|Create';
		return view('color.create',compact('title'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CategoryRequest $request)
	{
		Color::create([
			'name' => $request['name'],
		]);

		return redirect ('/color');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function show($id)
	// {
	// 	//
	// }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$color = Color::find($id);
		$title = 'Edit Color';
		return view('color.edit',compact('color','title'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$color = Color::find($id);
		$editcolor = Request::all(); 
		$updateColor = Color::find($id)->update($editcolor);
		return redirect('/color');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$color = Color::find($id);
		$color->delete();

		return Redirect::back();
	}

}
