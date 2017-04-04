<?php

namespace App\Http\Controllers;

use App\Categories;
use App\CategoriesGroup;
use Illuminate\Http\Request;

class PhotographController extends Controller
{
    //
    public function getPhoto(){
        $cate_group = CategoriesGroup::orderBy('cate_id','DESC')->get();
        $categories = Categories::all();
        return view('front.photograph',['cate_group'=>$cate_group,'categories'=>$categories]);
    }
}
