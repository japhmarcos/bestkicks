<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Auth;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
	'username', 
	'email', 
	'password', 
	'firstname', 
	'middlename', 
	'lastname',
	'dateofbirth',
	'user_types_id',
	'user_statuses_id',
	'gender',
	'locations_id',
	'landline',
	'mobilenumber',
	'display_photo',
	'valid_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * A user can have many posts.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */

	public function posts()
	{
		return $this->hasMany('App\Post');
	}

	/**
	 * A user can have many comments.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */

	public function comments()
	{
		return $this->hasMany('App\Comment');
	}

	/**
	 * A user only have one user status.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */

	public function user_status()
	{
		return $this->hasOne('App\UserStatus');
	}

	/**
	 * A user only have one user type.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */

	public function user_type()
	{
		return $this->hasOne('App\UserType');
	}

	/**
	 * A user is an admin.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */

	public function isAnAdmin()
	{
		
		if(Auth::user()->id == '1')
		{
			return true;
		}
		else
		{
			return false;
		}
	}

}
