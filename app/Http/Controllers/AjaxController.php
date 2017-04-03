<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;
use ImageResize;
use Psy\Exception\Exception;

class AjaxController extends Controller
{
    //
    public function getCategories($idCateGroup){
        $categories = Categories::where('cate_id',$idCateGroup)->get();

        foreach ($categories as $category){

            echo  "<option value='" . $category->c_id . "'>". $category->c_name ."</option>";
        }
    }

    /**
     *
     */
    public function ImagePreview($data){
        dd($data);
    }
}
