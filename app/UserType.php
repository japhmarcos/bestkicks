<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model {

	/**
	 * A user type belongs to a user.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */

	public function user()
	{
		return $this->belongsTo('App\User');
	}


}
