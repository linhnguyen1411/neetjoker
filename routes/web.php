<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('front.blog');
});

Route::get('photos',function (){
    return view('front.photograph');
});

Route::get('about_us',function (){
    return view('front.aboutus');
});

Route::get('contact_us',function (){
    return view('front.contact');
});

Route::get('article',function (){
    return view('front.article');
});

Route::get('video',function (){
    return view('front.video');
});

Route::get('news',function (){
    return view('front.news');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('index',function (){
        return view('admin.main');
    });
    Route::group(['prefix' => 'categories'], function (){
        Route::get('list','CategoryController@getList');

        Route::get('insert','CategoryController@getInsert');
        Route::post('insert','CategoryController@postInsert');

        Route::get('update/{id}','CategoryController@getUpdate');
        Route::post('update/{id}','CategoryController@postUpdate');

        Route::get('delete/{id}','CategoryController@getDelete');
    });

    Route::group(['prefix' => 'cate_group'], function (){
        Route::get('list','CateGroupController@getList');

        Route::get('insert','CateGroupController@getInsert');
        Route::post('insert','CateGroupController@postInsert');

        Route::get('update','CateGroupController@getUpdate');
        Route::post('update/{id}','CateGroupController@postUpdate');

        Route::get('delete/{id}','CateGroupController@getDelete');
    });
});