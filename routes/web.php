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


//index.blade
Route::get('/', 'PostController@index');
//flower
Route::get('/posts/flower','PostController@flower');
//create 表示
Route::get('/posts/create', 'PostController@create');
//お気に入り
Route::get('/posts/like', 'PostController@like');



//個別ページに飛ぶ
Route::get('/posts/{post}', 'PostController@show');
Route::resource('comment', 'CommentsController@store');

//個別投稿の編集画面
Route::get('/posts/{post}/edit', 'PostController@update');
// いいね用ボタン
Route::get('/reply/like/{post}', 'LikeController@like')->name('like');
//いいね取り消し用
//Route::get('/reply/unlike/{post}', 'LikeController@unlike')->name('unlike');st}', 'HomeController@unlike')->name('unlike');


//投稿用
Route::post('/posts', 'PostController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
