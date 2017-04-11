<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categories;
use App\CategoriesGroup;
use App\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterController extends Controller
{
    //
    public function getCateGroup($cate)
    {
        $cate_check = CategoriesGroup::where('cate_seo', $cate)->where('appear',1)->get();

        if (count($cate_check) == 0) {
            return redirect('error/404.html');
        } else {
            $cate_group = CategoriesGroup::orderBy('cate_id', 'ASC')->where('appear',1)->get();
            $categories = Categories::all();

            $posts = DB::table('cate_group')
                ->join('categories', 'cate_group.cate_id', '=', 'categories.cate_id')
                ->join('article', 'article.c_id', '=', 'categories.c_id')
                ->join('users', 'users.u_id', '=', 'article.u_id')
                ->select('cate_group.*', 'categories.*', 'article.*', 'users.*')
                ->where('cate_group.cate_seo', $cate)
                ->orderBy('article.highlight', 'desc')
                ->paginate(3);
            $condition = CategoriesGroup::where('cate_seo', $cate)->get();
            foreach ($condition as $c) {
                if ($c->cate_id == 1) {
                    $tingame = Article::where('cate_id', 2)->orderBy('created_at', 'DESC')->take(3)->get();
                    $blog = Article::where('cate_id', 3)->orderBy('created_at', 'DESC')->take(3)->get();
                    $photos = Images::all();
                    return view('front.master', ['cate_group' => $cate_group, 'categories' => $categories, 'posts' => $posts, 'tingame' => $tingame, 'blog' => $blog, 'photos' => $photos]);

                } elseif ($c->cate_id == 2) {
                    $tintuc = Article::where('cate_id', 1)->orderBy('created_at', 'DESC')->take(3)->get();
                    $blog = Article::where('cate_id', 3)->orderBy('created_at', 'DESC')->take(3)->get();
                    $photos = Images::all();
                    return view('front.master', ['cate_group' => $cate_group, 'categories' => $categories, 'posts' => $posts, 'tintuc' => $tintuc, 'blog' => $blog, 'photos' => $photos]);

                } else {
                    $tintuc = Article::where('cate_id', 1)->orderBy('created_at', 'DESC')->take(3)->get();
                    $tingame = Article::where('cate_id', 2)->orderBy('created_at', 'DESC')->take(3)->get();
                    $photos = Images::all();
                    return view('front.master', ['cate_group' => $cate_group, 'categories' => $categories, 'posts' => $posts, 'tintuc' => $tintuc, 'tingame' => $tingame, 'photos' => $photos]);
                }
            }
        }
    }

    public function getCategories($cate, $c)
    {
        $cate_check = CategoriesGroup::where('cate_seo', $cate)->where('appear',1)->get();
        $c_check = Categories::where('c_seo', $c)->get();
        if (count($cate_check) == 0 || count($c_check) == 0) {
            return redirect('error/404.html');
        } else {
            $cate_group = CategoriesGroup::orderBy('cate_id', 'DESC')->where('appear',1)->get();
            $categories = Categories::all();
            $posts = DB::table('cate_group')
                ->join('categories', 'cate_group.cate_id', '=', 'categories.cate_id')
                ->join('article', 'article.c_id', '=', 'categories.c_id')
                ->join('users', 'users.u_id', '=', 'article.u_id')
                ->select('cate_group.*', 'categories.*', 'article.*', 'users.*')
                ->where('categories.c_seo', $c)
                ->orderBy('article.highlight', 'desc')
                ->paginate(3);
            $condition = Categories::where('c_seo', $c)->get();
            foreach ($condition as $c) {
                if ($c->cate_group->cate_id == 1) {
                    $tingame = Article::where('cate_id', 2)->orderBy('created_at', 'DESC')->take(3)->get();
                    $blog = Article::where('cate_id', 3)->orderBy('created_at', 'DESC')->take(3)->get();
                    $photos = Images::all();
                    return view('front.master', ['cate_group' => $cate_group, 'categories' => $categories, 'posts' => $posts, 'tingame' => $tingame, 'blog' => $blog, 'photos' => $photos]);

                } elseif ($c->cate_group->cate_id == 2) {
                    $tintuc = Article::where('cate_id', 1)->orderBy('created_at', 'DESC')->take(3)->get();
                    $blog = Article::where('cate_id', 3)->orderBy('created_at', 'DESC')->take(3)->get();
                    $photos = Images::all();
                    return view('front.master', ['cate_group' => $cate_group, 'categories' => $categories, 'posts' => $posts, 'tintuc' => $tintuc, 'blog' => $blog, 'photos' => $photos]);

                } else {
                    $tintuc = Article::where('cate_id', 1)->orderBy('created_at', 'DESC')->take(3)->get();
                    $tingame = Article::where('cate_id', 2)->orderBy('created_at', 'DESC')->take(3)->get();
                    $photos = Images::all();
                    return view('front.master', ['cate_group' => $cate_group, 'categories' => $categories, 'posts' => $posts, 'tintuc' => $tintuc, 'tingame' => $tingame, 'photos' => $photos]);
                }
            }
        }
    }
}
