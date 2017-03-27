<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function getList()
    {
        $users = User::all();
        return view('admin.user.list', ['users' => $users]);
    }

    public function getInsert()
    {
        return view('admin.user.insert');
    }

    public function postInsert(Request $request)
    {
        $this->validate($request,
            [
                'u_name' => 'required|unique:users,u_name',
                'u_email' => 'required|unique:users,u_email',
                'u_pass' => 'min:6|required',
                'u_passAgain' => 'required|same:u_pass',
            ],
            [
                'u_name.required' => 'Bạn phải nhập vào username!',
                'u_name.unique' => 'Username đã tồn tại!',
                'u_email.required' => 'Bạn phải nhập vào email!',
                'u_email.unique' => 'Email đã tồn tại, vui lòng chọn email khác!',
                'u_pass.min' => 'Mật khẩu tối thiểu 6 kí tự.',
                'u_pass.required' => 'Bạn phải nhập vào mật khẩu.',
                'u_passAgain.required' => 'Bạn phải nhập lại mật khẩu!',
                'u_passAgain.same' => 'Mật khẩu nhập lại chưa khớp!',
            ]);

        $users = new User;
        $users->u_name = $request->u_name;
        $users->u_email = $request->u_email;
        $users->u_pass = bcrypt($request->u_pass);
        $users->u_roles = $request->u_roles;

        if ($request->hasFile('u_avatar')) {
            $file = $request->file('u_avatar');
            $format = $file->getClientOriginalExtension();
            if ($format != 'jpg' && $format != 'png' && $format != 'jpeg') {
                return redirect('administrator/users/list')->with(['flash_level' => 'danger', 'flash_message' => 'File upload lên phải có định dạng sau jpg,png,jpeg']);
            }
            $name = $file->getClientOriginalName();
            $avatar = str_random(4) . "_" . $name;
            while (file_exists("admin/avatar/" . $avatar)) {
                $avatar = str_random(4) . "_" . $name;
            }
            $file->move("admin/avatar/", $avatar);
            $users->u_avatar = $avatar;
        } else {
            $users->u_avatar = "example.png";
        }
        $users->save();

        return redirect('administrator/users/list')->with(['flash_level' => 'success', 'flash_message' => 'Thêm thành viên ' . $users->u_name . ' thành công!']);
    }

    public function getUpdate($id)
    {
        $update = User::find($id);
        return view('admin.user.update', ['update' => $update]);
    }

    public function postUpdate(Request $request, $id)
    {
        $update = User::find($id);
        if (isset($request->u_name)){
            $update->u_name = $request->u_name;
        }
        if ($request->passreset == 'on') {
            $update->u_pass = bcrypt('123456');
        }
        if (isset($request->u_avatar)){
            if ($request->hasFile('u_avatar')) {
                $file = $request->file('u_avatar');
                $format = $file->getClientOriginalExtension();
                if ($format != 'jpg' && $format != 'png' && $format != 'jpeg') {
                    return redirect('administrator/users/list')->with(['flash_level' => 'danger', 'flash_message' => 'File upload lên phải có định dạng sau jpg,png,jpeg']);
                }
                $name = $file->getClientOriginalName();
                $avatar = str_random(4) . "_" . $name;
                while (file_exists("admin/avatar/" . $avatar)) {
                    $avatar = str_random(4) . "_" . $name;
                }
                $file->move("admin/avatar/", $avatar);
                $update->u_avatar = $avatar;
            }
        }
        if (isset($request->u_roles)){
            $update->u_roles = $request->u_roles;
        }
        $update->save();
        return redirect('administrator/users/list')->with(['flash_level' => 'danger', 'flash_message' => 'Sửa thành cônggit']);
    }

    public function getDelete($id)
    {
        $delete = User::find($id);
        return redirect('administrator/users/list')->with(['flash_level' => 'success', 'flash_message' => 'Xóa thành viên ' . $delete->u_name . ' thành công!']);
    }
}
