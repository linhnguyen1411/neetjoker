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



Route::get('/', 'MainController@getIndex');
Route::get('article/{id}','IndexArticleController@getArticle');
Route::get('photograph','PhotographController@getPhoto');
Route::get('contact_us','ContactController@getContact');
Route::get('about_us','AboutUsController@getAbout');
Route::get('user/login','Auth\AuthController@getcheckMail');
//Route::get('user/registration','Auth\AuthController@getRegister');
Route::group(['prefix'=>'user'],function (){

    Route::post('registration','Auth\AuthController@postRegister');
    Route::get('login/auth','Auth\AuthController@getcheckUser');
    Route::post('login/auth','Auth\AuthController@postcheckUser');
    Route::get('logout','Auth\AuthController@userLogout');
});
Route::get('videos','VideosController@getVideos');
Route::group(['prefix'=>'error'],function (){
    Route::get('404.html','ErrorController@get404');
});
Route::get('news',function (){
    return view('front.news');
});
Route::group(['prefix' => 'administrator'], function () {
    Route::get('login','Auth\AuthController@getcheckMail');
    Route::post('auth','Auth\AuthController@postcheckMail');
    Route::get('login/auth','Auth\AuthController@getcheckPass');
    Route::post('login/auth','Auth\AuthController@postcheckPass');
    Route::get('logout','Auth\AuthController@logout');
    Route::group(['prefix' => 'categories','middleware'=>'adminLogin'], function (){
        Route::get('list','CategoryController@getList');

        Route::get('insert','CategoryController@getInsert');
        Route::post('insert','CategoryController@postInsert');

        Route::get('update/{id}','CategoryController@getUpdate');
        Route::post('update/{id}','CategoryController@postUpdate');

        Route::get('delete/{id}','CategoryController@getDelete');
    });

    Route::group(['prefix' => 'cate_group','middleware'=>'adminLogin'], function (){
        Route::get('list','CateGroupController@getList');

        Route::get('insert','CateGroupController@getInsert');
        Route::post('insert','CateGroupController@postInsert');

        Route::get('update/{id}','CateGroupController@getUpdate');
        Route::post('update/{id}','CateGroupController@postUpdate');

        Route::get('delete/{id}','CateGroupController@getDelete');
    });

    Route::group(['prefix'=>'categories','middleware'=>'adminLogin'],function(){
        Route::get('list','CategoriesController@getList');

        Route::get('insert','CategoriesController@getInsert');
        Route::post('insert','CategoriesController@postInsert');

        Route::get('update/{id}','CategoriesController@getUpdate');
        Route::post('update/{id}','CategoriesController@postUpdate');

        Route::get('delete/{id}','CategoriesController@getDelete');
    });
    Route::group(['prefix'=>'article','middleware'=>'blogger'],function(){

        Route::get('{$id}','ArticleController@getArticle');

        Route::get('list','ArticleController@getList');

        Route::get('insert','ArticleController@getInsert');
        Route::post('insert','ArticleController@postInsert');

        Route::get('update/{id}','ArticleController@getUpdate');
        Route::post('update/{id}','ArticleController@postUpdate');

        Route::get('delete/{id}','ArticleController@getDelete');
    });
    Route::group(['prefix'=>'images','middleware'=>'blogger'],function(){

        Route::get('list','ImagesController@getList');

        Route::get('insert','ImagesController@getInsert');
        Route::post('insert','ImagesController@postInsert');

        Route::get('update/{id}','ImagesController@getUpdate');
        Route::post('update/{id}','ImagesController@postUpdate');

        Route::get('delete/{id}','ImagesController@getDelete');
    });
    Route::group(['prefix'=>'users','middleware'=>'adminLogin'],function(){
        Route::get('list','UsersController@getList');

        Route::get('insert','UsersController@getInsert');
        Route::post('insert','UsersController@postInsert');

        Route::get('update/{id}','UsersController@getUpdate');
        Route::post('update/{id}','UsersController@postUpdate');

        Route::get('delete/{id}','UsersController@getDelete');
    });

    Route::group(['prefix'=>'roles','middleware'=>'adminLogin'],function (){
        Route::get('list','RolesController@getList');

        Route::get('insert','RolesController@getInsert');
        Route::post('insert','RolesController@postInsert');

        Route::get('update/{id}','RolesController@getUpdate');
        Route::post('update/{id}','RolesController@postUpdate');

        Route::get('delete/{id}','RolesController@getDelete');
    });
    Route::group(['prefix'=>'ajax','middleware'=>'adminLogin'],function(){
        Route::get('categories/{idCateGroup}','AjaxController@getCategories');
        Route::get('imagepre/{path}','AjaxController@ImagePreview');
    });
});

Route::get('{cate}','MasterController@getCateGroup');
Route::get('{cate}/{c}','MasterController@getCategories');


