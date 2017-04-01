<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    //
    public function getList(){

        return view('admin.images.list');
    }

    public function getInsert(){
        return view('admin.images.insert');
    }
}
