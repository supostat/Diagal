<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

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
	protected $fillable = ['login', 'email', 'first_name', 'second_name', 'password', 'permission_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    public function permission(){
        return $this->belongsTo('App/Permission');
    }

    public function isAdmin(){
        if($this->attributes['permission_id'] == 1){
            return true;
        }
        return false;
    }
    public function isManager(){
        if($this->attributes['permission_id'] == 2){
            return true;
        }
        return false;
    }

    public function fullName(){
        $first_name = $this->attributes['first_name'];
        $second_name = $this->attributes['second_name'];

        return $first_name.' '.$second_name;
    }
}
