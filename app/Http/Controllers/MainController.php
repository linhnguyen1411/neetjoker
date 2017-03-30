<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categories;
use App\CategoriesGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function getIndex(){
        $cate_group = CategoriesGroup::orderBy('cate_id','DESC')->get();
        $categories = Categories::all();

        $posts = DB::table('cate_group')
        ->join('categories','cate_group.cate_id','=','categories.cate_id')
        ->join('article','article.c_id','=','categories.c_id')
        ->join('users','users.u_id','=','article.u_id')
        ->select('cate_group.*','categories.*','article.*','users.*')
        ->orderBy('article.highlight','desc')
        ->get();

        return view('front.blog',['cate_group'=>$cate_group,'categories'=>$categories,'posts'=>$posts]);
    }
}
