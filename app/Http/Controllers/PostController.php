<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Post, App\Category, App\User, App\Like;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    //index表示
    public function index(Post $post)
    {
    return view('index')->with(['posts' => $post->getPaginateByLimit()]);
    //$post->getPaginateByLimit()＝ポストテーブルの中身
    //'posts' =>＄ポストにポスつという名前にする
    }
    
    //show.blade個別の詳細ページ移動
//    public function show(Post $post)
//    {
//    return view('show')->with(['post' => $post]);
//    }
    
    //show表示お気に入り付き
    public function show(Post $post)
    {  
 
        $like=Like::where('post_id', $post->id)->where('user_id', auth()->user()->id)->first();
        return view('show', compact('post', 'like'));
    }
    
    //create.blade記事投稿
    public function create()
    {
    //カテゴリーの情報をカテゴリーズから持ってくる
        
    return view('create'); //->with(['categories'=>$category]);//一緒にcategoriesのデータも渡すwith
    }
    
    //お気に入り
    
    
    //ログイン画面表示
    public function login()
    {
    return view('login'); //->with(['' => $]);
    }
    
    
    //会員登録画面
    public function signin()
    {
    return view('signin'); //->with(['' => $]);
    }
    
    
    
    
    
    
   


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