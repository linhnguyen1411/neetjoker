<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categories;
use App\CategoriesGroup;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexArticleController extends Controller
{
    //
    public function getArticle($id){
        $cate_group = CategoriesGroup::orderBy('cate_id','DESC')->where('appear',1)->get();
        $categories = Categories::all();
        $article = Article::find($id);
        $comment = Comment::where('a_id',$id)->get();
//        $posts = DB::table('cate_group')
//            ->join('categories','cate_group.cate_id','=','categories.cate_id')
//            ->join('article','article.c_id','=','categories.c_id')
//            ->join('users','users.u_id','=','article.u_id')
//            ->select('cate_group.*','categories.*','article.*','users.*')
//            ->orderBy('article.highlight','desc')
//            ->get();

        $recent=Article::orderBy('created_at','desc')->take(3)->get();
        return view('front.article',['article'=>$article,'cate_group'=>$cate_group,'categories'=>$categories,'comment'=>$comment,'recent'=>$recent]);
    }
}
