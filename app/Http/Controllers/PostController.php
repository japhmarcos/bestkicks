<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\EditPostRequest;
use App\Location;
use App\Brand;
use App\Size;
use App\Condition;
use App\Color;
use App\ShoeType;
use App\Post;
use App\Comment;
use App\User;
use Auth;
use Request;
use Redirect;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class PostController extends Controller {

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
		$brands = Brand::all();
		$sizes = Size::all();
		$conditions = Condition::all();
		$colors = Color::all();
		$types = ShoeType::all();
		$locations = Location::all();
		$title = 'Post|Create';
		return view('post.create', compact('brands','sizes','conditions',
			'colors','types','locations','title'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreatePostRequest $request)
	{
		//
			$username = Auth::user()->username;
			$title = $request['title'];
		//
			$frontview = Input::file('frontview');
			$backview = Input::file('backview');
			$soleview = Input::file('soleview');
			$rightview = Input::file('rightview');
			$leftview = Input::file('leftview');
			$topview = Input::file('topview');
		//
			$frontviewname = $frontview->getClientOriginalName();
			$backviewname = $backview->getClientOriginalName();
			$soleviewname = $soleview->getClientOriginalName();
			$rightviewname = $rightview->getClientOriginalName();
			$leftviewname = $leftview->getClientOriginalName();
			$topviewname = $topview->getClientOriginalName();

		//Put image to /images/userposts
			Input::file('frontview')->move(public_path().'/images/userposts/' . $username . '/' . $title, $frontviewname);
			Input::file('backview')->move(public_path().'/images/userposts/' . $username . '/' . $title, $backviewname);
			Input::file('soleview')->move(public_path().'/images/userposts/' . $username . '/' . $title, $soleviewname);
			Input::file('rightview')->move(public_path().'/images/userposts/' . $username . '/' . $title, $rightviewname);
			Input::file('leftview')->move(public_path().'/images/userposts/' . $username . '/' . $title, $leftviewname);
			Input::file('topview')->move(public_path().'/images/userposts/' . $username . '/' . $title, $topviewname);
		//	
		 	$front['frontview'] = $frontviewname;
	        $back['backview'] = $backviewname;
	        $sole['soleview'] = $soleviewname;
	        $right['rightview'] = $rightviewname;
	        $left['leftview'] = $leftviewname;
	        $top['topview'] = $topviewname;
		
		Post::create([
			'users_id'		=> $request['users_id'],
			'statuses_id'	=> $request['statuses_id'],
			'brands_id' 	=> $request['brands_id'],
			'sizes_id' 		=> $request['sizes_id'],
			'conditions_id'	=> $request['conditions_id'],
			'colors_id'		=> $request['colors_id'],
			'shoe_types_id' => $request['shoe_types_id'],
			'locations_id'	=> $request['locations_id'],
			'price'			=> $request['price'],
			'title'			=> $request['title'],
			'description'	=> $request['description'],
			'frontview'		=> $front['frontview'],
			'backview'		=> $back['backview'],
			'soleview'		=> $sole['soleview'],
			'rightview'		=> $right['rightview'],
			'leftview'		=> $left['leftview'],
			'topview'		=> $top['topview']
		]);

		return redirect ('/post/all');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$posts = Post::find($id);
		$comments = Comment::all();
		$brands = Brand::all();
		$sizes = Size::all();
		$conditions = Condition::all();
		$colors = Color::all();
		$types = ShoeType::all();
		$locations = Location::all();
		$users = User::all();
		if(Auth::user()->user_types_id == 1)
		{
		$mode ='adminmaster';
		}
		else
		{
		$mode = 'usermaster';
		}
		$title = $posts->title;
		return view('post.show', compact('posts', 'brands','sizes','conditions',
			'colors','types','locations', 'users','mode','comments','title'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$brands = Brand::all();
		$sizes = Size::all();
		$conditions = Condition::all();
		$colors = Color::all();
		$types = ShoeType::all();
		$locations = Location::all();
		$posts = Post::find($id);
		$title = 'Edit'.' '.$posts->title;
		return view('bestkicks.editpost', compact('brands','sizes','conditions',
			'colors','types','locations', 'posts','title'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$username = Auth::user()->username;
		$title = Post::find($id)->title;
       	$posts = Post::find($id);

		if (Input::file('frontview') != null)
		{
			$frontview = Input::file('frontview');
			$frontviewname = $frontview->getClientOriginalName();
			Input::file('frontview')->move(public_path().'/images/userposts/' . $username . '/' . $title, $frontviewname);
		}

		if (Input::file('backview') != null)
		{
			$backview = Input::file('backview');
			$backviewname = $backview->getClientOriginalName();
			Input::file('backview')->move(public_path().'/images/userposts/' . $username . '/' . $title, $backviewname);
		}

		if (Input::file('soleview') != null)
		{
			$soleview = Input::file('soleview');
			$soleviewname = $soleview->getClientOriginalName();
			Input::file('soleview')->move(public_path().'/images/userposts/' . $username . '/' . $title, $soleviewname);
		}

		if (Input::file('rightview') != null)
		{
			$rightview = Input::file('rightview');
			$rightviewname = $rightview->getClientOriginalName();
			Input::file('rightview')->move(public_path().'/images/userposts/' . $username . '/' . $title, $rightviewname);
		}

		if (Input::file('leftview') != null)
		{
			$leftview = Input::file('leftview');
			$leftviewname = $leftview->getClientOriginalName();
			Input::file('leftview')->move(public_path().'/images/userposts/' . $username . '/' . $title, $leftviewname);
		}

		if (Input::file('topview') != null)
		{
			$topview = Input::file('topview');
			$topviewname = $topview->getClientOriginalName();
			Input::file('topview')->move(public_path().'/images/userposts/' . $username . '/' . $title, $topviewname);
		}


		$editpost = Request::all();


	    if (Input::file('frontview') != null)
	    {
	    	$editpost['frontview'] = $frontviewname;
	    }

	    if (Input::file('backview') != null)
	    {
	    	$editpost['backview'] = $backviewname;
	    }

	    if (Input::file('soleview') != null)
	    {
	    	$editpost['soleview'] = $soleviewname;
	    }

	    if (Input::file('rightview') != null)
	    {
	    	$editpost['rightview'] = $rightviewname;
	    }

	    if (Input::file('leftview') != null)
	    {
	    	$editpost['leftview'] = $leftviewname;
	    }

	    if (Input::file('topview') != null)
	    {
	    	$editpost['topview'] = $topviewname;
	    }

	    $updatepost = Post::find($id)->update($editpost);

	    return redirect ('/myposts');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();

		return redirect ('/post/all');

	}

	public function myposts()
	{
		if(Auth::user()->user_types_id == 1)
		{
		$mode ='adminmaster';
		}
		else
		{
		$mode = 'usermaster';
		}
		$username = Auth::user()->username;
		$brands = Brand::all();
		$sizes = Size::all();
		$conditions = Condition::all();
		$colors = Color::all();
		$types = ShoeType::all();
		$locations = Location::all();
		$posts = Post::all();
		$users = User::all();
		$title = 'My Posts';
		return view('post.user', compact('brands','sizes','conditions',
			'colors','types','locations', 'posts', 'users', 'username',
			'mode','title'));
	}

	public function all()
	{
		if(Auth::user()->user_types_id == 1)
		{
		$mode ='adminmaster';
		}
		else
		{
		$mode = 'category';
		}
		$brands = Brand::all();
		$sizes = Size::all();
		$conditions = Condition::all();
		$colors = Color::all();
		$types = ShoeType::all();
		$locations = Location::all();
		$users = User::all();
		$category = Input::get('category');
		$sortas = Input::get('sortas');

		if($category == null || $sortas == null){
			$category = 'updated_at';
			$sortas = 'desc';
		}
		
		$posts = Post::where(function($query){
			$fbrands = Input::get('brand');
			$fsizes = Input::get('size');
			$fconditions =  Input::get('condition');
			$fcolors =  Input::get('color');
			$fshoetypes = Input::get('shoetype');
			$flocations = Input::get('location');
			

		if(isset($fbrands)){
				$query->where('brands_id', '=',$fbrands);
			}
		if(isset($fsizes)){
				$query->where('sizes_id', '=',$fsizes);
			}
		if(isset($fconditions)){
				$query->where('conditions_id', '=',$fconditions);
			}
		if(isset($fcolors)){
				$query->where('colors_id', '=',$fcolors);
			}
		if(isset($fshoetypes)){
				$query->where('shoe_types_id', '=',$fshoetypes);
			}
		if(isset($flocations)){
				$query->where('locations_id', '=',$flocations);
			}			
		})->orderBy($category, $sortas)->get();

		$title = 'Posts';
			return view('post.all',compact(['posts'],'brands','sizes','conditions',
			'colors','types','locations', 'users','mode','title'));
	}
	
	public function post()
	{
		if(Auth::user()->user_types_id == 1)
		{
		$mode ='adminmaster';
		}
		else
		{
		$mode = 'usermaster';
		}
		$brands = Brand::all();
		$sizes = Size::all();
		$conditions = Condition::all();
		$colors = Color::all();
		$types = ShoeType::all();
		$locations = Location::all();
		return view('bestkicks.post', compact('brands','sizes','conditions',
			'colors','types','locations','mode'));
	}


	public function search()
	{
		if(Auth::user()->user_types_id == 1)
		{
		$mode ='adminmaster';
		}
		else
		{
		$mode = 'usermaster';
		}
		$keyword = Input::get('keyword');
		$brands = Brand::all();
		$sizes = Size::all();
		$conditions = Condition::all();
		$colors = Color::all();
		$types = ShoeType::all();
		$locations = Location::all();
		$users = User::all();
		$title = 'Search'.' '. $keyword;
		$color_id = Color::where('name', 'LIKE', '%'.$keyword.'%')->pluck('id');
		$size_id = Size::where('name', 'LIKE', '%'.$keyword.'%')->pluck('id');
		$brand_id = Brand::where('name', 'LIKE', '%'.$keyword.'%')->pluck('id');
		$condition_id = Condition::where('name', 'LIKE', '%'.$keyword.'%')->pluck('id');
		$location_id = Location::where('name', 'LIKE', '%'.$keyword.'%')->pluck('id');
		$shoe_type_id = ShoeType::where('name', 'LIKE', '%'.$keyword.'%')->pluck('id');

		$posts = Post::where('title', 'LIKE', '%'.$keyword.'%')
						->orWhere('description', 'LIKE', '%'.$keyword.'%')
						->orWhere('price', 'LIKE', '%'.$keyword.'%')
						->orWhere('colors_id', $color_id, '%'.$keyword.'%')
						->orWhere('sizes_id', $size_id, '%'.$keyword.'%')
						->orWhere('brands_id', $brand_id, '%'.$keyword.'%')
						->orWhere('conditions_id', $condition_id, '%'.$keyword.'%')
						->orWhere('locations_id', $location_id, '%'.$keyword.'%')
						->orWhere('shoe_types_id', $shoe_type_id, '%'.$keyword.'%')
						->orderBy('updated_at', 'desc')
						->get();
		if ($posts != null){
		return view('post.search', compact('keyword','posts','mode','brands','sizes','conditions',
			'colors','types','locations','users','title'));
		}
		else{
			return Redirect::back();
		}
	}

	public function finished()
	{
		if(Auth::user()->user_types_id == 1)
		{
		$mode ='adminmaster';
		}
		else
		{
		$mode = 'usermaster';
		}
		$brands = Brand::all();
		$sizes = Size::all();
		$conditions = Condition::all();
		$colors = Color::all();
		$types = ShoeType::all();
		$locations = Location::all();
		$users = User::all();
		$title = 'Finished Transactions';
		
		$posts = Post::where('statuses_id', 2)->orderBy('updated_at', 'desc')
		->get();

			return view('post.finished',compact(['posts'],'brands','sizes','conditions',
			'colors','types','locations', 'users', 'mode','title'));
	}

	public function update_status()
	{
		$id = Input::get('id');
		$posts = Post::where('id', $id)->first();
		if($posts->statuses_id == 1)
		$posts->statuses_id = '2';
		else
		$posts->statuses_id = '1';
		$posts->update();

		return Redirect::back();
	}
}
