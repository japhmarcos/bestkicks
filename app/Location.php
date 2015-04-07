<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

	/**
	 * A location belongs to a post.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */

	protected $fillable = [
	'name'
	];

	public function post()
	{
		return $this->belongsTo('App\Post');
	}

	/**
	 * A location belongs to a user.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */

	public function user()
	{
		return $this->belongsTo('App\User');
	}


}