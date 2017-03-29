<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table='article';
    protected $primaryKey='a_id';
    public function category(){
        return $this->belongsTo('App\Categories','c_id','c_id');
    }

    public function comment(){
        return $this->hasMany('App\Comment','a_id','a_id');
    }

    public function user(){
        return $this->belongsTo('App\User','u_id','u_id');
    }
}
