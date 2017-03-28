<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed c_highlight
 */
class Categories extends Model
{
    //
    protected $table ='categories';
    protected $primaryKey ='c_id';
    public function cate_group(){
        return $this->belongsTo('App\CategoriesGroup','cate_id','cate_id');
    }

    public function article(){
        return $this->hasMany('App\Article','c_id','c_id');
    }
}
