<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table ='images';
    protected $primaryKey='i_id';

    public function user(){
        return $this->belongsTo('app\User','u_id','u_id');
    }
    public function category(){
        return $this->belongsTo('app\Categories','c_id','c_id');
    }
//    public function comment(){
//        return $this->hasMany('app\Comment','cm_id','cm_id');
//    }
}
