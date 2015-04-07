<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	/**
	 * A post is owned by a user.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	protected $fillable = [
	'users_id',
	'statuses_id',
	'brands_id',
	'sizes_id',
	'conditions_id',
	'colors_id',
	'shoe_types_id',
	'locations_id',
	'title',
	'price',
	'description',
	'frontview',
	'backview',
	'soleview',
	'rightview',
	'leftview',
	'topview'
	];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	/**
	 * A post can have many comments.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */

	public function comments()
	{
		return $this->hasMany('App\Comment');
	}

	/**
	 * A post can have only one brand.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */

	public function brand()
	{
		return $this->hasOne('App\Brand');
	}

	/**
	 * A post can have only one color.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */

	public function color()
	{
		return $this->hasOne('App\Color');
	}

	/**
	 * A post can have only one condition.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */

	public function condition()
	{
		return $this->hasOne('App\Condition');
	}

	/**
	 * A post can have only one condition.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */

	public function location()
	{
		return $this->hasOne('App\Location');
	}

	/**
	 * A post can have only one size.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */

	public function size()
	{
		return $this->hasOne('App\Size');
	}

	/**
	 * A post can have only one condition.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */

	public function shoe_type()
	{
		return $this->hasOne('App\ShoeType');
	}

	/**
	 * A post can have only one status.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */

	public function status()
	{
		return $this->hasOne('App\Status');
	}

}