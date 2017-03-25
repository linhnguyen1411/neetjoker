<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesGroup extends Model
{
    //
    protected $table='cate_group';
    protected $primaryKey='cate_id';
    public function categories(){
        return $this->hasMany('App\Categories','cate_id','cate_id');
    }
}
