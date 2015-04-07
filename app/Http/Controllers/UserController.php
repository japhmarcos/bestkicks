<?php namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequests;
use App\Http\Controllers\Controller;
use App\User;
use App\Brand;
use App\Size;
use App\Condition;
use App\Color;
use App\ShoeType;
use App\Location;
use App\Post;
use App\UserType;
use View;
use Request;
use Input;
use Auth;
use Hash;
use Redirect;
class UserController extends Controller {

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
		$brands = Brand::all();
		$sizes = Size::all();
		$conditions = Condition::all();
		$colors = Color::all();
		$types = ShoeType::all();
		$location = Location::find(Auth::user()->locations_id);
		$user_type = UserType::find(Auth::user()->user_types_id);
		$locations = Location::all();
		$title = 'My Profile';
		
		return view('bestkicks.userprofile', compact('brands','sizes','conditions',
			'colors','types','locations', 'location', 'user_type','title'));
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

		if (Input::file('display_photo') != null)
		{
			$display_photo = Input::file('display_photo');
			$filename = $display_photo->getClientOriginalName();
			Input::file('display_photo')->move(public_path().'/images/profile/'. Auth::user()->username . '/', $filename);
		}

		if (Input::file('valid_id') != null)
		{
			$valid_id = Input::file('valid_id');
			$validname = $valid_id->getClientOriginalName();
			Input::file('valid_id')->move(public_path().'/images/valid/'. Auth::user()->username . '/', $validname);
		}

	    $edituserprofile = Request::all();

	    if (Input::file('display_photo') != null)
	    {
	    	$edituserprofile['display_photo'] = $filename;
	    }

	    if (Input::file('valid_id') != null)
	    {
	    	$edituserprofile['valid_id'] = $validname;
	    }
	    
	    $userprofile = User::find(Auth::user()->id)->update($edituserprofile);

		return redirect('/userprofile');
	}

	public function password()
	{
		$users = User::all();
		$title = 'Edit Password';
		return view ('bestkicks.editpassword', compact('users','title'));
	}

	public function passwordedit()
	{
		 $edituserpassword = Request::all();
		 $edituserpassword['password'] = Hash::make(Input::get('password'));
		 $userpassword = User::find(Auth::user()->id)->update($edituserpassword);

		 return redirect('/editprofile');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$brands = Brand::all();
		$sizes = Size::all();
		$conditions = Condition::all();
		$colors = Color::all();
		$types = ShoeType::all();
		$locations = Location::all();
		$posts = Post::all();
		$user = User::find($id);
		if(Auth::user()->user_types_id == 1)
		{
		$mode ='adminmaster';
		}
		else
		{
		$mode = 'usermaster';
		}
		$username = $user->username;
		$location = Location::find($user->locations_id);
		$user_type = UserType::find($user->user_types_id);
		$title = $user->firstname.' '.$user->lastname;
		return view('user.profile', compact('brands','sizes','conditions','username',
			'colors','types','locations', 'location', 'user','mode','posts','user_type','title'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		$brands = Brand::all();
		$sizes = Size::all();
		$conditions = Condition::all();
		$colors = Color::all();
		$types = ShoeType::all();
		$locations = Location::all();
		$title = 'Edit Profile';

		return view('bestkicks.editprofile', compact('brands','sizes','conditions',
			'colors','types','locations','title'));
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
		$user = User::find($id);
		$user->delete();

		return Redirect::back();
	}

	public function indexseller()
	{
		$users = User::all();
		$title = 'Manage Sellers';
		return view('user.sellers', compact('users','title'));
	}

	public function indexbuyer()
	{
		$users = User::all();
		$title = 'Manage Buyers';
		return view('user.buyers', compact('users','title'));
	}

	public function usersellers()
	{
		$brands = Brand::all();
		$sizes = Size::all();
		$conditions = Condition::all();
		$colors = Color::all();
		$types = ShoeType::all();
		$locations = Location::all();
		$users = User::all();
		$title = 'Sellers';
		return view('bestkicks.usersellers', compact('brands','sizes','conditions',
			'colors','types','locations','users','title'));
	}

	public function userbuyers()
	{
		$brands = Brand::all();
		$sizes = Size::all();
		$conditions = Condition::all();
		$colors = Color::all();
		$types = ShoeType::all();
		$locations = Location::all();
		$users = User::all();
		$title = 'Buyers';
		return view('bestkicks.userbuyers', compact('brands','sizes','conditions',
			'colors','types','locations','users','title'));
	}

	public function verified()
	{
		$user = User::all();

		return view('user.verified', compact('user'));
	}

	public function regular()
	{
		$user = User::all();

		return view('user.regular', compact('user'));
	}

	public function update_seller()
	{
		$id = Input::get('id');
		$users = User::where('id', $id)->first();
		$users->user_statuses_id = '2';
		$users->update();

		return redirect('/sellers');
	}

	public function update_buyer()
	{
		$id = Input::get('id');
		$users = User::where('id', $id)->first();
		$users->user_statuses_id = '2';
		$users->update();

		return redirect('/buyers');
	}

}
