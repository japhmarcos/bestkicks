<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model {

	/**
	 * A size belongs to a post.
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
