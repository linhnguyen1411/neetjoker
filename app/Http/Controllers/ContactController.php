<?php

namespace App\Http\Controllers;

use App\Categories;
use App\CategoriesGroup;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function getContact(){
        $cate_group = CategoriesGroup::orderBy('cate_id','DESC')->get();
        $categories = Categories::all();
        return view('front.contact',['cate_group'=>$cate_group,'categories'=>$categories]);
    }
}
