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

Route::group(['prefix' => 'administrator'], function () {
    Route::get('/','Auth\AuthController@getcheckMail');
    Route::post('auth','Auth\AuthController@postcheckMail');
    Route::get('login/auth','Auth\AuthController@getcheckPass');
    Route::post('login/auth','Auth\AuthController@postcheckPass');
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

        Route::get('update/{id}','CateGroupController@getUpdate');
        Route::post('update/{id}','CateGroupController@postUpdate');

        Route::get('delete/{id}','CateGroupController@getDelete');
    });

    Route::group(['prefix'=>'categories'],function(){
        Route::get('list','CategoriesController@getList');

        Route::get('insert','CategoriesController@getInsert');
        Route::post('insert','CategoriesController@postInsert');

        Route::get('update/{id}','CategoriesController@getUpdate');
        Route::post('update/{id}','CategoriesController@postUpdate');

        Route::get('delete/{id}','CategoriesController@getDelete');
    });
    Route::group(['prefix'=>'article'],function(){

        Route::get('{$id}','ArticleController@getArticle');

        Route::get('list','ArticleController@getList');

        Route::get('insert','ArticleController@getInsert');
        Route::post('insert','ArticleController@postInsert');

        Route::get('update/{id}','ArticleController@getUpdate');
        Route::post('update/{id}','ArticleController@postUpdate');

        Route::get('delete/{id}','ArticleController@getDelete');
    });

    Route::group(['prefix'=>'users'],function(){
        Route::get('list','UsersController@getList');

        Route::get('insert','UsersController@getInsert');
        Route::post('insert','UsersController@postInsert');

        Route::get('update/{id}','UsersController@getUpdate');
        Route::post('update/{id}','UsersController@postUpdate');

        Route::get('delete/{id}','UsersController@getDelete');
    });

    Route::group(['prefix'=>'roles'],function (){
        Route::get('list','RolesController@getList');

        Route::get('insert','RolesController@getInsert');
        Route::post('insert','RolesController@postInsert');

        Route::get('update/{id}','RolesController@getUpdate');
        Route::post('update/{id}','RolesController@postUpdate');

        Route::get('delete/{id}','RolesController@getDelete');
    });
    Route::group(['prefix'=>'ajax'],function(){
        Route::get('categories/{idCateGroup}','AjaxController@getCategories');
    });
});