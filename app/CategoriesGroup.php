<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesGroup extends Model
{
    //
    protected $table='cate_group';
    public function categories(){
        return $this->hasMany('App\Categories','cate_id','cate_id');
    }
}
