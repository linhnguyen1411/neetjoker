<?php

namespace App\Http\Controllers;

use App\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    //
    public function getList(){
        $roles = Roles::all();
        return view('admin.roles.list',['roles'=>$roles]);
    }

    public function getInsert(){

        return view('admin.roles.insert');
    }

    public function postInsert(Request $request){
        $this->validate($request,
        [
            'r_name'=>'required|unique:roles,r_name',
            'r_description'=>'required|min:10'
        ],
        [
            'r_name.required'=>'Bạn phải nhập vào vai trò trên trang!',
            'r_name.unique'=>'Vai trò đã tồn tại!',
            'r_description.required'=>'Bạn phải nhập mô tả vai trò!',
            'r_description.min'=>'Mô tả phải dài hơn 10 kí tự!'
        ]);

        $roles = new Roles;
        $roles->r_name = $request->r_name;
        $roles->r_description = $request->r_description;
        $roles->save();

        return redirect('administrator/roles/list')->with(['thongbao'=>'Thêm roles ' .$roles->r_name .' thành công']);
    }

    public function getUpdate($id){
        $roles = Roles::find($id);
        return view('admin.roles.update',['roles'=>$roles]);
    }

    public function postUpdate(Request $request,$id){
        $roles = Roles::find($id);

        if (isset($request->r_name)){
            $roles->r_name = $request->r_name;
        }

        if (isset($request->r_description)){
            $roles->r_description = $request->r_description;
        }

        $roles ->save();

        return redirect('administrator/roles/list')->with(['thongbao'=>'Thay đổi thông tin roles '. $roles->r_name .' thành công.']);
    }

    public function getDelete(){

    }
}
