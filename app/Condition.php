<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model {

	/**
	 * A condition belongs to a post.
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


}