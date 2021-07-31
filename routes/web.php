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

//ページ表示
//index.blade
Route::get('/', 'PostController@index');
//flower
Route::get('/posts/flower','PostController@flower');
//plant
Route::get('/posts/plant','PostController@flower');
//animal
Route::get('/posts/animal','PostController@animal');
//human
Route::get('/posts/human','PostController@human');
//create 表示
Route::get('/posts/create', 'PostController@create');
//お気に入り
Route::get('/posts/like', 'PostController@like');
//個別ページに飛ぶ
Route::get('/posts/{post}', 'PostController@show');

// //like機能
// //いいね機能を実装する上でのルーティングを定義
// Route::get('/posts/like/{post}', 'PostController@like')->name('post.like');
// Route::get('/posts/unlike/{post}', 'PostController@unlike')->name('post.unlike');

//コメント投稿機能
Route::resource('comment', 'CommentsController@store');
//個別投稿の編集画面
Route::get('/posts/{post}/edit', 'PostController@edit');





//投稿用
Route::post('/posts', 'PostController@store');//
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



//コメント投稿機能
//Route::resource('comment', 'CommentsController', ['only' => ['store']]);

// Route::patch('/posts/{post}', 'PostsController@update');
// Route::delete('/posts/{post}', 'PostsController@destroy');
// Route::post('/posts/{post}/comments', 'CommentsController@store');
