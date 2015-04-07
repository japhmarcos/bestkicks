<?php namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Size;
use Request;
use Redirect;
use View;

class SizeController extends Controller {

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
		$size = Size::all();
		$title = 'Manage Sizes';
		return view('size.index', compact('size','title'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$title = 'Size|Create';
		return view('size.create',compact('title'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CategoryRequest $request)
	{
		Size::create([
			'name' => $request['name'],
		]);

		return redirect ('/size');
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
		$size = Size::find($id);
		$title = 'Edit Size';
		return view('size.edit',compact('size','title'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$size = Size::find($id);
		$editsize = Request::all(); 
		$updatesize = Size::find($id)->update($editsize);
		return redirect('/size');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$size = Size::find($id);
		$size->delete();

		return Redirect::back();
	}

}
