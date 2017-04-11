<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
class ImagesController extends Controller
{
//
    public function getList()
    {
        $image = Images::all();
        return view('admin.images.list',['image'=>$image]);
    }

    public function getInsert()
    {
        $categories = Categories::where('cate_id',4)->get();
        return view('admin.images.insert',['categories'=>$categories]);
    }

    public function postInsert(Request $request)
    {
        $image = new Images();
        $image->c_id = $request->SelCategories;
        $file =$file = $request->file('Img');
        $name = $file->getClientOriginalName();
        $name = str_random(4) . "_" . $name;
        $file->move("public/upload/images", $name);
        $image->i_full = $name;
        $path = public_path("upload\\images\\".$name);
        $img2 =Image::make($path)->resize(260,168);
        $preview = "preview_".$name;
        $img2->save($img2->dirname.'\\'.$preview);
        $image->i_preview = $preview;
        $image->i_title = $request->iTitle;
        $image->u_id = Auth::user()->u_id;
        $image->i_view = 0;
        if ($request->i_highlight =="on"){
            $image->i_highlight = 1;
        }
        else{
            $image->i_highlight = 0;
        }
        $image->save();
        return redirect('administrator/images/insert')->with(['thongbao'=>'Ảnh '.$name .' của bạn đã tải lên thành công']);
    }
    public function getUpdate($id){
        $categories = Categories::where('cate_id',4)->get();
        $image = Images::find($id);
        return view('admin.images.update',['image'=>$image,'categories'=>$categories]);
    }
    public function postUpdate(Request $request, $id){



    }
}
