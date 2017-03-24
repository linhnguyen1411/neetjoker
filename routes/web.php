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