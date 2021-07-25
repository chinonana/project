<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post)
    {
    return view('index')->with(['posts' => $post->getPaginateByLimit()]);
    } 
    
    //show.blade個別の詳細ページ
    public function show(Post $post)
    {
    return view('show')->with(['post' => $post]);
    }
    
    //create.blade記事投稿
    public function create()
    {
        return view('create');
    }
    
    //ログイン画面表示
    public function login(Post $post)
    {
    return view('login')->with(['post' => $post]);
    }
//login
//Route::get('/posts/login', 'PostController@create');
//signin
//Route::get('/posts/signin', 'PostController@create');
    //投稿修正
    //public function edit(Post $post)
    //{
    //return view('edit')->with(['post' => $post]);
    //}
    //投稿保存用
    public function store(Post $post, PostRequest $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    
    //修正用
    public function update(PostRequest $request, Post $post)
    {
    $input_post = $request['post'];
    $post->fill($input_post)->save();

    return redirect('/posts/' . $post->id);
    }
}