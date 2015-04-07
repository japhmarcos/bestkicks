<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model {

	/**
	 * A color belongs to a post.
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
