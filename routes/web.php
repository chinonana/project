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

Route::get('/users', 'UserController@index');
Route::get('/categories', 'CategoryController@index');
Route::get('/perfumes', 'PerfumeController@index');
Route::get('/posts', 'PostController@index');
Route::get('/comments', 'CommentController@index');
Route::get('/likes', 'LikeController@index');
