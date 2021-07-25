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


//posts/index.blade
Route::get('/', 'PostController@index');
//create 表示
Route::get('/posts/create', 'PostController@create');
//create保存
Route::post('/posts', 'PostController@store');
//個別投稿の編集画面
Route::get('/posts/{post}/edit', 'PostController@update');
//posts->index/coments->details.blsde
Route::get('/posts/{post}', 'PostController@show');
//お気に入り
//Route::get('/posts/like', 'PostController@like');

//login 表示
Route::get('/posts/login', 'PostController@login');
//signin
//Route::get('/posts/signin', 'PostController@signin');



//投稿用
Route::post('/posts', 'PostController@store');