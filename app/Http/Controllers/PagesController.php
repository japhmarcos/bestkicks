<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Post;
use App\Brand;
use App\Size;
use App\Condition;
use App\Color;
use App\ShoeType;
use App\Location;
use App\UserType;


use Illuminate\Http\Request;

class PagesController extends Controller {

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
		
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
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

	public function adminhome()
	{	
		$users = User::all();
		$user_count = $users->count() - 1;
		$posts = Post::all();
		$post_count = $posts->count();
		$title = 'Home';
		return view('bestkicks.adminhome', compact('users','user_count','posts',
			'post_count','title'));
	}

	public function userhome()
	{
		$brands = Brand::all();
		$sizes = Size::all();
		$conditions = Condition::all();
		$colors = Color::all();
		$types = ShoeType::all();
		$locations = Location::all();
		$user_types = UserType::all();
		$title = 'Home';
		
		return view('bestkicks.userhome', compact('brands','sizes','conditions',
			'colors','types','locations','user_types','title'));
	}

}
