<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoeType extends Model {

	/**
	 * A shoe type belongs to a post.
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

