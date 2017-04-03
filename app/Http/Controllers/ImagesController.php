<?php

namespace App\Http\Controllers;

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

        return view('admin.images.list');
    }

    public function getInsert()
    {
        return view('admin.images.insert');
    }

    public function postInsert(Request $request)
    {
        $image = new Images();

        $file =$file = $request->file('Img');
        $name = $file->getClientOriginalName();
        $name = str_random(4) . "_" . $name;
        $file->move("upload/images", $name);
        $image->i_full = $name;
        $path = public_path("upload\\images\\".$name);
        $img2 =Image::make($path)->resize(260,168);
        $preview = "preview_".$name;
        $img2->save($img2->dirname.'\\'.$preview);
        $image->i_preview = $preview;
        $image->i_title = $request->iTitle;
        $image->u_id = Auth::user()->u_id;

        $image->save();
        return redirect('administrator/images/insert');
    }

}
