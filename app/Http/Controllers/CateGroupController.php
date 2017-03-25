<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CateGroupController extends Controller
{
    //
    public function getList(){

        return view('admin.cate_group.list');
    }

    public function getInsert(){

        return view('admin.cate_group.insert');
    }

    public function getUpdate(){
        return view('admin.cate_group.update');
    }
}
