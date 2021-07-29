<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
use App\Like;
use App\Comment;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    //index表示
    public function index(Post $post)
    {
    
    $posts=Post::with('category')->get();
    return view('index')->with(['posts' => $posts]);
    //$post->getPaginateByLimit()＝ポストテーブルの中身
    //'posts' =>＄ポストにポスつという名前にする
    }
    
     
    //create.blade記事投稿
    public function create(Category $category)
    {
    //カテゴリーの情報をカテゴリーズから持ってくる
    return view('create')->with(['categories'=>$category->get()]);
    //一緒にcategoriesのデータも渡すwithで
    }
    
    //flowerpage
    public function flower(Post $post)
    {
        return view('flower')->with(['posts'->$posts]);
    }
    
    // いいね機能つきshow表示
    public function show(Post $post)
    {  
      //$like=Like::where('post_id', $post->id)->where('user_id', auth()->user()->id)->first();
      //return view('show', compact('post', 'like'));
      return view('show')->with(['post' => $post]);
    }
    
    
    //お気に入り



    
    
    
    //投稿保存用->create
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