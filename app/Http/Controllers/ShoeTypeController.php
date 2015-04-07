<?php namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\ShoeType;
use Request;
use Redirect;
use View;

class ShoeTypeController extends Controller {

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
		$type = ShoeType::all();
		$title = 'Manage Shoe Types';
		return view('shoetype.index', compact('type','title'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$title = 'Shoe Type|Create';
		return view('shoetype.create',compact('title'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CategoryRequest $request)
	{
		Shoetype::create([
			'name' => $request['name'],
		]);

		return redirect ('/shoetype');
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
		$type = ShoeType::find($id);
		$title = 'Edit Shoe Type';
		return view('shoetype.edit',compact('type','title'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$shoetype = ShoeType::find($id);
		$editshoetype = Request::all(); 
		$updateshoetype = ShoeType::find($id)->update($editshoetype);
		return redirect('/shoetype');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$shoetype = ShoeType::find($id);
		$shoetype->delete();

		return Redirect::back();
	}

}
