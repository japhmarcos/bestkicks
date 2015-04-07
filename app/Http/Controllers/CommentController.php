<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Http\Requests\PostCommentRequest;
use Redirect;
Use Input;
use Illuminate\Http\Request;

class CommentController extends Controller {
	
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
	public function store(PostCommentRequest $request){
		if ($request != null){

		Comment::create([
			'users_id' => $request['users_id'],
			'posts_id' => $request['posts_id'],
			'content' => $request['content']
		]);
	}

		return Redirect::back();
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
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		$id = Input::get('comment_id');
		$comment = Comment::find($id);
		$comment->delete();

		return Redirect::back();


	
	}

}
