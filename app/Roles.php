<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //
    protected $table='roles';
    protected $primaryKey ='r_id';

    public function users(){
        return $this->hasOne('App\User','u_roles','r_id');
    }
}
