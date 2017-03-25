<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table='comment';

    public function article(){
        return $this->belongsTo('App\Article','a_id','a_id');
    }

    public function user(){
        return $this->belongsTo('App\User','u_id','u_id');
    }
}
