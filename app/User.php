<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'u_id','u_name', 'u_email', 'u_pass','u_avatar', 'u_roles','remember_token'
    ];
    protected $primaryKey ='u_id';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'u_pass', 'remember_token',
    ];
    public function roles(){
        return $this->hasOne('App\Roles','r_id','u_roles');
    }
    public function comment(){
        return $this->hasMany('App\Comment','u_id','u_id');
    }

    public function article(){
        return $this->hasMany('App\Article','u_id','u_id');
    }
    public function photos(){
        return $this->hasMany('App\Images','u_id','u_id');
    }
    public function getAuthPassword()
    {
        return $this->u_pass;
    }
}
