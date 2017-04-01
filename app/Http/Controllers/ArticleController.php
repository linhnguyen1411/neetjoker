<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categories;
use App\CategoriesGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    //
    public function getList(){
        $articles = Article::all();
        return view('admin.article.list',['articles'=>$articles]);
    }
    public function getArticle($id){
        return view('admin.article.article_view');
    }
    public function getInsert(){
        $cate_group = CategoriesGroup::all();
        $categories = Categories::where('cate_id',2)->get();
        return view('admin.article.insert',['cate_group'=>$cate_group,'categories'=>$categories]);
    }

    public function postInsert(Request $request){
        $this->validate($request,
        [
            'a_title'=>'required|min:10|max:100|unique:article,a_title',
            'a_description'=>'required|min:10|max:200',
            'a_content'=>'required',
            'a_tag'=>'required',
            'image'=>'required',
        ],
        [
            'a_title.required'=>'Bạn phải nhập vào tiêu đề bài viết!',
            'a_title.unique'=>'Bài viết đã tồn tại!',
            'a_title.min'=>'Tiêu đề phải trên 10 kí tự!',
            'a_title.max'=>'Tiêu đề dài nhất 100 kí tự!',

            'a_description.required'=>'Bạn phải nhập vào mô tả bài viết!',
            'a_description.min'=>'Phần mô tả phải hơn 10 kí tự',
            'a_description.max'=>'Phần mô tả phải ít hơn 200 kí tự',

            'a_content.required'=>'Bài viết phải có nội dung!',
            'a_tag.required'=>'Chọn 1 vài tags cho bài viết của bạn!',
            'image.required'=>'Chọn hình ảnh làm mẫu cho bài viết của bạn!'
        ]);

        $insert = new Article;

        $insert->a_title = $request->a_title;
        $insert->seo = changeTitle($request->a_title);
        $insert->c_id = $request->SelCate;
        $insert->u_id = Auth::user()->u_id;
        $insert->a_description = $request->a_description;
        $insert->a_content = $request->a_content;
        $insert->view = 0;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $format = $file->getClientOriginalExtension();
            if ($format != 'jpg' && $format != 'png' && $format != 'jpeg') {
                return redirect('administrator/article/insert')->with(['flash_level' => 'danger', 'flash_message' => 'File upload lên phải có định dạng sau jpg,png,jpeg']);
            }
            $name = $file->getClientOriginalName();
            $image = str_random(4) . "_" . $name;
            while (file_exists("upload/article/" . $image)) {
                $avatar = str_random(4) . "_" . $name;
            }
            $file->move("upload/article/", $image);
            $insert->a_image = $image;
        } else {
            $insert->a_image = "example.jpg";
        }
        if($request->highlight == "on"){
            $insert->highlight= 1;
        }
        else{
            $insert->highlight= 0;
        }
        $insert->a_tag = $request->a_tag;

        $insert->save();

        return redirect('administrator/article/list')->with(['thongbao'=>'Viết bài thành công!']);
    }
    public function getUpdate($id){
        $cate_group = CategoriesGroup::all();
        $article = Article::find($id);
        return view('admin.article.update',['article'=>$article,'cate_group'=>$cate_group]);
    }
    public function postUpdate(Request $request,$id){
//        if (isset($request)){
//            $this->validate($request,
//                [
//                    'a_title'=>'required|min:10|max:100|unique:article,a_title',
//                    'a_description'=>'required|min:10|max:200',
//                    'a_content'=>'required',
//                    'a_tag'=>'required',
//                    'a_image'=>'required',
//                ],
//                [
//                    'a_title.required'=>'Bạn phải nhập vào tiêu đề bài viết!',
//                    'a_title.unique'=>'Bài viết đã tồn tại!',
//                    'a_title.min'=>'Tiêu đề phải trên 10 kí tự!',
//                    'a_title.max'=>'Tiêu đề dài nhất 100 kí tự!',
//
//                    'a_description.required'=>'Bạn phải nhập vào mô tả bài viết!',
//                    'a_description.min'=>'Phần mô tả phải hơn 10 kí tự',
//                    'a_description.max'=>'Phần mô tả phải ít hơn 200 kí tự',
//
//                    'a_content.required'=>'Bài viết phải có nội dung!',
//                    'a_tag.required'=>'Chọn 1 vài tags cho bài viết của bạn!',
//                    'a_image.required'=>'Chọn hình ảnh làm mẫu cho bài viết của bạn!'
//                ]);
//        }
        $update = Article::find($id);
        $update->a_title = $request->a_title;
        $update->seo = changeTitle($request->a_title);
        $update->c_id = $request->SelCate;
        $update->u_id = Auth::user()->u_id;
        $update->a_description = $request->a_description;
        $update->a_content = $request->a_content;
        $update->view = 0;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $format = $file->getClientOriginalExtension();
            if ($format != 'jpg' && $format != 'png' && $format != 'jpeg') {
                return redirect('administrator/article/insert')->with(['flash_level' => 'danger', 'flash_message' => 'File upload lên phải có định dạng sau jpg,png,jpeg']);
            }
            $name = $file->getClientOriginalName();
            $image = str_random(4) . "_" . $name;
            while (file_exists("upload/article/" . $image)) {
                $avatar = str_random(4) . "_" . $name;
            }
            $file->move("upload/article/", $image);
            $update->a_image = $image;
        }
        if($request->highlight == "on"){
            $update->highlight= 1;
        }
        else{
            $update->highlight= 0;
        }
        $update->a_tag = $request->a_tag;

        $update->save();
        return redirect('administrator/article/list')->with(['thongbao'=>'Update thành công']);
    }
    public function getDelete($id){
        $delete = Article::find($id);
        $delete->delete();
        return redirect('administrator/article/list')->with(['thongbao'=>'Xóa thành công bài viết '.$delete->a_title]);
    }
}
