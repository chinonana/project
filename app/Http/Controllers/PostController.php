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
    
    //header表示
    //flowerpage
    public function flower(Post $post)
    {
    
    $posts=Post::with('category')->get();
    return view('flower')->with(['posts' => $posts]);
    }
    //plant
    public function plant(Post $post)
    {
    $posts=Post::with('category')->get();
    return view('plant')->with(['posts' => $posts]);
    }
    //animal
    public function animal(Post $post)
    {
    $posts=Post::with('category')->get();
    return view('animal')->with(['posts' => $posts]);
    }
    //human
    public function human(Post $post)
    {
    $posts=Post::with('category')->get();
    return view('human')->with(['posts' => $posts]);
    }
    //create.blade記事投稿
    public function create(Category $category)
    {
    //カテゴリーの情報をカテゴリーズから持ってくる
    return view('create')->with(['categories'=>$category->get()]);
    //一緒にcategoriesのデータも渡すwithで
    }
    
    
    // いいね機能つきshow表示
    public function show(Post $post)
    {  
      //$like=Like::where('post_id', $post->id)->where('user_id', auth()->user()->id)->first();
      //return view('show', compact('post', 'like'));
      return view('show')->with(['post' => $post]);
    }
    
    
    
    
    
    
    // only()の引数内のメソッドはログイン時のみ有効
  public function __construct()
  {
    $this->middleware(['auth', 'verified'])->only(['like', 'unlike']);
  }
  
   /**
  * 引数のIDに紐づくリプライにLIKEする
  *
  * @param $id リプライID
  * @return \Illuminate\Http\RedirectResponse
  */
  public function like($id)
  {
    Like::create([
      'post_id' => $id,
      'user_id' => Auth::id(),
    ]);

    session()->flash('success', 'You Liked the Post.');

    return redirect()->back();
  }

  /**
   * 引数のIDに紐づくリプライにUNLIKEする
   *
   * @param $id リプライID
   * @return \Illuminate\Http\RedirectResponse
   */
  public function unlike($id)
  {
    $like = Like::where('poat_id', $id)->where('user_id', Auth::id())->first();
    $like->delete();

    session()->flash('success', 'You Unliked the Post.');

    return redirect()->back();
  }
  
    
    






    
    
    
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