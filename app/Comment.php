<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	protected $fillable = [
	'users_id',
	'posts_id',
	'content'
	];

	/**
	 * A comment belongs to a post.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */

	public function post()
	{
		return $this->belongsTo('App\Post');
	}

	/**
	 * A comment belongs to a user.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */

	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
