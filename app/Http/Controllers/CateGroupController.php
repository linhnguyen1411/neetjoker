<?php

namespace App\Http\Controllers;

use App\CategoriesGroup;
use Illuminate\Http\Request;

class CateGroupController extends Controller
{
    //
    public function getList(){
        $cate_group= CategoriesGroup::all();
        return view('admin.cate_group.list',['cate_groups'=>$cate_group]);
    }

    public function getInsert(){

        return view('admin.cate_group.insert');
    }

    public function postInsert(Request $request){
        $this->validate($request,[
            'CateName'=>'required|unique:cate_group,cate_name'
        ],[
            'CateName.required'=>'Bạn phải nhập tên Thể loại!',
            'CateName.unique'=>'Tên Thể loại đã tồn tại!',
        ]);
        $cate = new CategoriesGroup;
        $cate->cate_name = $request->CateName;
        $cate->cate_seo = changeTitle($request->CateName);
        $cate->save();
        return redirect('admin/cate_group/list')->with(['thongbao'=>'Thêm thành công '.$cate->cate_name]);
    }

    public function getUpdate($id){
        $cate_group = CategoriesGroup::find($id);
        return view('admin.cate_group.update',['cate_groups'=>$cate_group]);
    }
    public function postUpdate(Request $request, $id){
        $this->validate($request,[
            'CateName'=>'required|unique:cate_group,cate_name'
        ],[
            'CateName.required'=>'Bạn phải nhập tên Thể loại!',
            'CateName.unique'=>'Tên Thể loại đã tồn tại!',
        ]);
        $cate_group = CategoriesGroup::find($id);
        $cate_group->cate_name = $request->CateName;
        $cate_group->cate_seo = changeTitle($request->CateName);
        $cate_group->created_at = $cate_group->created_at;
        $cate_group->updated_at = date("Y-m-d h:i:s");
        $cate_group->save();

        return redirect('admin/cate_group/list')->with(['thongbao'=>'Update thành công']);
    }

    public function getDelete($id){
        $cate_group = CategoriesGroup::find($id);
        $cate_group->delete();

        return redirect('admin/cate_group/list')->with(['thongbao'=>'Đã xóa '.$cate_group->cate_name.' thành công']);
    }
}
