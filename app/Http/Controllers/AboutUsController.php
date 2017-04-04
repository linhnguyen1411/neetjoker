<?php

namespace App\Http\Controllers;

use App\Categories;
use App\CategoriesGroup;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{

    public function getAbout(){
        $cate_group = CategoriesGroup::orderBy('cate_id','DESC')->get();
        $categories = Categories::all();
        return view('front.aboutus',['cate_group'=>$cate_group,'categories'=>$categories]);
    }
}
