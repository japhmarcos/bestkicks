<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {

	/**
	 * A brand belongs to a post.
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
