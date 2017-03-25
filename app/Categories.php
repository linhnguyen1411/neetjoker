<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $table ='categories';

    public function cate_group(){
        return $this->belongsTo('App\CategoriesGroup','cate_id','cate_id');
    }

    public function article(){
        return $this->hasMany('App\Article','c_id','c_id');
    }
}
