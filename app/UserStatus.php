<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model {

	/**
	 * A user status belongs to a user.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */

	public function user()
	{
		return $this->belongsTo('App\User');
	}


}
