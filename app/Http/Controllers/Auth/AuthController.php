<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;

/**
 * @property Guard auth
 */
class AuthController extends Controller
{
    //
    public function getcheckMail(){
       return view('admin.lock');
    }
    public function postcheckMail(Request $request){
        $this->validate($request,
        [
            'u_email'=>'required|email',
        ],
        [
            'u_email.required' =>'Bạn phải nhập vào Email quản trị!',
            'u_email.email'=>'Định dạng email ko hợp lệ!'
        ]);

            $email = User::where('u_email',$request->u_email)->get();
            if (count($email)>0) {
                foreach ($email as $e) {
                    $authEmail = $e->u_email;
                    $level = $e->u_roles;
                    if ($level == 1) {
                        return redirect('administrator/login/auth?email=' . $authEmail);
                    } elseif ( $level != 1) {
                        return redirect('user/login/auth?email='.$authEmail);
                    } else {

                    }
                }
            }
        return redirect('user/login')->with(['flash_level' => 'danger', 'flash_message' => 'Email không chính xác!']);
     }
    public function getcheckPass(){
        if (isset($_GET['email'])){
            $email = User::where('u_email',$_GET['email'])->get();
            foreach ($email as $e){
                $name = $e->u_name;
                $avatar ='admin/avatar/'. $e->u_avatar;
                return view('admin.login',['name'=>$name,'avatar'=>$avatar,'email'=>$_GET['email']]);
            }
        }

    }
    public function postcheckPass(LoginRequest $request){
        $login = array(
            'u_name'=>$request->u_name,
            'u_pass'=>$request->u_pass,
        );
        if (Auth::attempt($login) && Auth::user()->u_email == $_GET['email']){
            return redirect('administrator/article/list');
        }
        else{
            return back()->with(['flash_message'=>'Tên đăng nhập hoặc mật khẩu ko chính xác']);
        }

    }
    public function logout(){
        Auth::logout();
        return view('admin.lock');
    }
    public function getcheckUser(){
        if (isset($_GET['email'])){
            $email = User::where('u_email',$_GET['email'])->get();
            foreach ($email as $e){
                $name = $e->u_name;
                $avatar ='admin/avatar/'. $e->u_avatar;
                return view('admin.user',['name'=>$name,'avatar'=>$avatar,'email'=>$_GET['email']]);
            }
        }
    }
    public function postcheckUser(Request $request){
        $login = array(
            'u_email'=>$_GET['email'],
            'u_pass'=>$request->u_pass,
        );
        if (Auth::attempt($login)){
            return redirect('');
        }
        else{
            return back()->with(['flash_message'=>'Mật khẩu không chính xác? Nếu không phải bạn, hãy logout!']);
        }

    }
    public function userLogout(){
        Auth::logout();
        return redirect('')->with(['flash_message'=>'Hẹn gặp lại!']);
    }

    public function postRegister(Request $request){
        $this->validate($request,
        [
            'u_passAgn' =>'same:u_pass',
            'rules'=>'required'
        ],
        [
            'u_passAgn.same'=>'Mật khẩu chưa trùng khớp.',
            'rules.required'=>'Bạn phải đồng ý với các điều khoản của website!'
        ]);
        $u= new User;
        $u->u_birthday = $request->u_birthday;
        $u->u_phone = $request->u_phone;
        $u->u_gender = $request->u_gender;
        $u->u_pass = bcrypt($request->u_pass);
        $u->u_email = $request->u_email;
        $u->u_roles = 4;
        $u->u_name =$request->u_name;
        $u->remember_token = $request->_token;
        if ($request->hasFile('u_avatar')) {
            $file = $request->file('u_avatar');
            $format = $file->getClientOriginalExtension();
            if ($format != 'jpg' && $format != 'png' && $format != 'jpeg') {
                return redirect('users/registration')->with(['flash_level' => 'danger', 'flash_message' => 'File upload lên phải có định dạng sau jpg,png,jpeg']);
            }
            $name = $file->getClientOriginalName();
            $avatar = str_random(4) . "_" . $name;
            while (file_exists("public/admin/avatar/" . $avatar)) {
                $avatar = str_random(4) . "_" . $name;
            }
            $file->move("public/admin/avatar/", $avatar);
            $u->u_avatar = $avatar;
        } else {
            $u->u_avatar = "example.png";
        }
        $u->save();
        $login = array(
            'u_email'=>$request->u_email,
            'u_pass'=>$request->u_pass
        );
        if ($u->save()){
            Auth::attempt($login);
            return redirect('');
        }
    }
}
