<?php

namespace App\Http\Controllers;

use App\Categories;
use App\CategoriesGroup;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    //
    public function getVideos(){
        $cate_group = CategoriesGroup::orderBy('cate_id','ASC')->where('appear',1)->get();
        $categories = Categories::all();
        return view('front.video',['cate_group'=>$cate_group,'categories'=>$categories]);
    }
}
