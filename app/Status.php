<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model {

	/**
	 * A status belongs to a post.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */

	public function post()
	{
		return $this->belongsTo('App\Post');
	}

}