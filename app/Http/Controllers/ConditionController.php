<?php namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Condition;
use Request;
use View;
use Redirect;


class ConditionController extends Controller {

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
		$condition = Condition::all();
		$title = 'Manage Conditions';
		return view('condition.index', compact('condition','title'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$title = 'Condition|Create';
		return view('condition.create',compact('title'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CategoryRequest $request)
	{
		Condition::create([
			'name' => $request['name'],
		]);

		return redirect ('/condition');
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
		$condition = Condition::find($id);
		$title = 'Edit Condition';
		return view('condition.edit',compact('condition','title'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function update($id)
	{
		$condition = Condition::find($id);
		$editcondition = Request::all(); 
		$updatebrand = Condition::find($id)->update($editcondition);
		return redirect('/condition');
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$condition = Condition::find($id);
		$condition->delete();

		return Redirect::back();
	}

}
