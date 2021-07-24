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
//個別投稿の編集画面
Route::get('/posts/{post}/edit', 'PostController@update');
//posts->index/coments->details.blsde
Route::get('/posts/{post}', 'PostController@show');



//index->postting
Route::post('/posts', 'PostController@store');