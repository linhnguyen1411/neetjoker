<?php

namespace App\Http\Controllers;

use App\Categories;
use App\CategoriesGroup;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function getList(){
        $cate = Categories::all();
        return view('admin.categories.list',['cate'=>$cate]);
    }

    public function getInsert(){
        $cate_group = CategoriesGroup::all();
        return view('admin.categories.insert',['cate_group'=>$cate_group]);
    }
    public function postInsert(Request $request){
        $this->validate($request,
        [
            'c_name'=>'required|unique:categories,c_name'
        ],
        [
            'c_name.required'=>'Bạn phải nhập vào Categories Name.',
            'c_name.unique'=>'Categories Name đã tồn tại.'
        ]);

        $c = new Categories;
        $c->c_name = $request->c_name;
        $c->c_seo = changeTitle($request->c_name);
        $c->cate_id = $request->cateGroup;
        if ($request->highlight=="on"){
            $c->c_highlight = 1;
        }
        else{
            $c->c_highlight = 0;
        }
        $c->save();
        return redirect('administrator/categories/insert')->with(['thongbao'=>'Thêm thành công ' .$c->c_name]);
    }
    public function getUpdate($id){
        $cate_group = CategoriesGroup::all();
        $update = Categories::find($id);
        return view('admin.categories.update',['cate_group'=>$cate_group, 'update'=>$update]);
    }
    public function postUpdate(Request $request,$id)
    {
        $update = Categories::find($id);
        if (isset($request->cateGroup)){
            $update->cate_id = $request->cateGroup;
        }
        if (isset($request->c_name)){
            $update->c_name = $request->c_name;
            $update->c_seo = changeTitle($request->c_name);
        }
        if (isset($request->highlight)){
            if ($request->highlight =="on"){
                $update->c_highlight = 1;
            }
            else{
                $update->c_highlight = 0;
            }
        }
        $update->save();
        return redirect('administrator/categories/list')->with(['thongbao'=>'Update thành công '.$update->c_name]);
    }

    public function getDelete($id){
        $delete = Categories::find($id);
        $delete->delete();
        return redirect('administrator/categories/list')->with(['thongbao'=> 'xóa thành công '.$delete->c_name]);
    }
}
